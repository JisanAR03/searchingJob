<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\JobSeeker;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify($service,$token)
    {   
        if($service == 'jobseeker'){
        $user = JobSeeker::where('verification_token', 'jobseeker/'.$token)->first();
        if ($user) {
            $user->is_verified = true;
            $user->verification_token = null;
            $user->save();
            session(['seeker_session' => $user->JobSeekerID]);
            return redirect()->route('home')->with('success', 'Email verified successfully.');
        }
        }
        else{
            $user = Employer::where('verification_token', 'employer/'.$token)->first();
            if ($user) {
                $user->is_verified = true;
                $user->verification_token = null;
                $user->save();
                session(['employer_session' => $user->EmployerID]);
                return redirect()->route('home')->with('success', 'Email verified successfully.');
            }
        }

        // If the user is not found, show an error message or redirect to an error page
        return redirect()->route('home')->with('error', 'Invalid verification token.');
    }

}
