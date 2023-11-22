<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class JobSeekerRegistrationController extends Controller
{
    public function developerlook_index(){
        return view('job-seekers-registration');
    }
    public function developerlook_job_seeker_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'seeker_email' => 'required|email|unique:JobSeekers,Email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->route('job_seeker_registration')->with('error', 'Invalid Email or Password');
        }

        $verificationToken = Str::random(40); // Generate a verification token

        $jobSeeker = JobSeeker::create([
            'Email' => $request->seeker_email,
            'PasswordHash' => Hash::make($request->password),
            'verification_token' => 'jobseeker/'.$verificationToken, // Save the verification token to the user record
        ]);

        // Send the verification email
        Mail::to($jobSeeker->Email)->send(new VerificationEmail($jobSeeker));

        return redirect()->route('home')->with('success', 'Account created successfully. Please check your email for verification.');
    }

    // public function developerlook_job_seeker_store(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'seeker_email' => 'required|email|unique:JobSeekers,Email',
    //         'password' => 'required|min:8',
    //     ]);
    //     if($validator->fails()){
    //         return redirect()->route('job_seeker_registration')->with('error', 'Invalid Email or Password');
    //     }
    //     else{
    //         JobSeeker::create(['Email' => $request->seeker_email,'PasswordHash' => Hash::make($request->password),]);
    //         return redirect()->route('home')->with('success', 'Account Created Successfully');
    //     }
    // }
    public function redirectToProvider(string $provider)
    {
        if($provider == 'google'){
        $newRedirectUrl = 'http://127.0.0.1:8000/register/google/callback';
        $envFilePath = base_path('.env');
        $contents = file_get_contents($envFilePath);
        $updatedContents = preg_replace('/^GOOGLE_REDIRECT_URI=.*$/m', 'GOOGLE_REDIRECT_URI=' . $newRedirectUrl, $contents);
        file_put_contents($envFilePath, $updatedContents);
        return Socialite::driver($provider)->redirect();
    }
        elseif($provider == 'linkedin'){
        $newRedirectUrl = 'http://127.0.0.1:8000/register/linkedin/callback';
        $envFilePath = base_path('.env');
        $contents = file_get_contents($envFilePath);
        $updatedContents = preg_replace('/^LINKEDIN_REDIRECT_URI=.*$/m', 'LINKEDIN_REDIRECT_URI=' . $newRedirectUrl, $contents);
        file_put_contents($envFilePath, $updatedContents);
        return Socialite::driver($provider)->redirect();
        }
        else{
            return redirect()->route('home')->with('error', 'Invalid Provider');
        }            
    }
    public function handleProviderCallback(string $provider)
    {
        if($provider == 'google'){
        $user = Socialite::driver($provider)->user();

        // Check if the user already exists based on the social media ID or email address
        $existingUser = JobSeeker::where('SocialId', $user->getId())->orWhere('Email', $user->getEmail())->first();

        if ($existingUser) {
            session(['seeker_session' => $existingUser->JobSeekerID]);
            return redirect()->route('home')->with('success', 'Logged in Successfully');
        } else {
            // User doesn't exist, create a new user account
            $newUser = JobSeeker::create([
                'Email' => $user->getEmail(),
                'SocialId' => $user->getId(),
                'is_verified' => '1',
                // 'PasswordHash' => null, // You can set a default or random password here if needed
            ]);
            session(['seeker_session' => $newUser->JobSeekerID]);
            return redirect()->route('home')->with('success', 'Account created and logged in successfully');
        }
        }
        elseif($provider == 'linkedin'){
        $user = Socialite::driver($provider)->user();
        $existingUser = JobSeeker::where('SocialId', $user->id)->orWhere('Email', $user->email)->first();
        if ($existingUser) {
            session(['seeker_session' => $existingUser->JobSeekerID]);
            return redirect()->route('home')->with('success', 'Logged in successfully');
        } else {
        $newUser = JobSeeker::create([
            'Email' => $user->email,
            'SocialId' => $user->id,
            'is_verified' => '1',
        ]);
        session(['seeker_session' => $newUser->JobSeekerID]);
        return redirect()->route('home')->with('success', 'Account created and logged in successfully');
            }
        }
        else{
            return redirect()->route('home')->with('error', 'Invalid Provider');
        }
    }

}
