<?php

namespace App\Http\Controllers;

use Dotenv\Dotenv;
use App\Models\Employer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;


class EmployerRegistrationController extends Controller
{
    public function developerlook_index(){
        return view('employers-registration');
    }
    public function developerlook_employer_store(Request $request)
{   
    $validator = Validator::make($request->all(), [
        'business_email' => 'required|email|unique:Employers,BusinessEmail',
        'password' => 'required|min:8',
    ]);
    if($validator->fails()){
        return redirect()->route('employer_registration')->with('error', 'Invalid Email or Password');
    }
    else{
        $verificationToken = Str::random(40);
        $Employer = Employer::create([
            'BusinessEmail' => $request->business_email,
            'PasswordHash' => Hash::make($request->password),
            'verification_token' => 'employer/'.$verificationToken, // Save the verification token to the user record
        ]);
        Mail::to($Employer->BusinessEmail)->send(new VerificationEmail($Employer));
        return redirect()->route('home')->with('success', 'Account created successfully. Please check your email for verification.');
        // Employer::create(['BusinessEmail' => $request->business_email,'PasswordHash' => Hash::make($request->password),]);
    }
}
public function redirectToProvider(string $provider)
    {
        if($provider == 'google'){
            $newRedirectUrl = 'http://127.0.0.1:8000/empregister/google/callback';
            $envFilePath = base_path('.env');
            $contents = file_get_contents($envFilePath);
            $updatedContents = preg_replace('/^GOOGLE_REDIRECT_URI=.*$/m', 'GOOGLE_REDIRECT_URI=' . $newRedirectUrl, $contents);
            file_put_contents($envFilePath, $updatedContents);
            return Socialite::driver($provider)->redirect();
        }
        elseif($provider == 'linkedin'){
        $newRedirectUrl = 'http://127.0.0.1:8000/empregister/linkedin/callback';
        $envFilePath = base_path('.env');
        $contents = file_get_contents($envFilePath);
        $updatedContents = preg_replace('/^LINKEDIN_REDIRECT_URI=.*$/m', 'LINKEDIN_REDIRECT_URI=' . $newRedirectUrl, $contents);
        file_put_contents($envFilePath, $updatedContents);
        return Socialite::driver($provider)->redirect();
        }
        else{
            return redirect()->route('employer_registration')->with('error', 'Invalid Provider');
        }
    }
    public function handleProviderCallback(string $provider)
    {   
        if($provider == 'google'){
            $user = Socialite::driver($provider)->user();
        // Check if the user already exists based on the social media ID or email address
            $existingUser = Employer::where('SocialId', $user->getId())->orWhere('BusinessEmail', $user->getEmail())->first();

        if ($existingUser) {
            session(['employer_session' => $existingUser->EmployerID]);
            return redirect()->route('home')->with('success', 'Logged in Successfully');
        } else {
            // User doesn't exist, create a new user account
            $newUser = Employer::create([
                'BusinessEmail' => $user->getEmail(),
                'SocialId' => $user->getId(),
                'is_verified' => '1',
                // 'PasswordHash' => null, // You can set a default or random password here if needed
            ]);
            session(['employer_session' => $newUser->EmployerID]);
            return redirect()->route('home')->with('success', 'Account created and logged in successfully');
        }
        }
        elseif($provider == 'linkedin'){
            $user = Socialite::driver($provider)->user();
            $existingUser = Employer::where('SocialId', $user->id)->orWhere('BusinessEmail', $user->email)->first();
            if ($existingUser) {
                session(['employer_session' => $existingUser->EmployerID]);
                return redirect()->route('home')->with('success', 'Logged in successfully');
            } else {
            $newUser = Employer::create([
                'BusinessEmail' => $user->email,
                'SocialId' => $user->id,
                'is_verified' => '1',
            ]);
            session(['employer_session' => $newUser->JobSeekerID]);
            return redirect()->route('home')->with('success', 'Account created and logged in successfully');
                }
            }
        else{
            return redirect()->route('employer_registration')->with('error', 'Invalid Provider');
        }
    }
}
