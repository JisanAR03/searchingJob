<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class JSDMyAccountController extends Controller
{
    public function developerlook_index(){
        if(session()->has('seeker_session')){
            $user_data = JobSeeker::where('JobSeekerID', session('seeker_session'))->first();
            return view('job-seeker-dash-my-account', compact('user_data'));
        }
        else{
            return redirect()->route('job_seekers_login')->with('error', 'Please Login to Continue');
        }
    }
    public function developerlook_account_update_data(Request $request){
        try{
            $seekerName = $request->seekerName;
        $new_email = $request->new_email;
        $new_email_conf = $request->new_email_conf;
        $current_password = $request->current_password;
        $new_password = $request->new_password;
        $new_password_conf = $request->new_password_conf;
        $update_data = JobSeeker::where('JobSeekerID', session('seeker_session'))->first();
        if(Hash::check($current_password,$update_data->PasswordHash)){
            if($seekerName != null){
                $update_data->FullName = $seekerName;
            }
            if($new_email != null && $new_email_conf!=null){
                if($new_email == $new_email_conf){
                    #check if email already exists
                    $check_email = JobSeeker::where('Email', $new_email)->first();
                    if($check_email){
                        return redirect()->route('job-seeker-my-account')->with('error', 'Email Already Exists');
                    }
                    $update_data->Email = $new_email;
                    if($new_password != null && $new_password_conf!=null){
                        if($new_password == $new_password_conf){
                        $update_data->PasswordHash = Hash::make($new_password);
                        }
                        else{
                            return redirect()->route('job-seeker-my-account')->with('error', 'Passwords do not match');
                        }
                    }
                    $update_data->update();
                    return redirect()->route('job-seeker-my-account')->with('success', 'Account Updated Successfully');
                }
                else{
                    return redirect()->route('job-seeker-my-account')->with('error', 'Emails do not match');
                }
            }
            else{
                if($new_password != null && $new_password_conf!=null){
                    if($new_password == $new_password_conf){
                        $update_data->PasswordHash = Hash::make($new_password);
                        $update_data->update();
                        return redirect()->route('job-seeker-my-account')->with('success', 'Account Updated Successfully');
                    }
                    else{
                        return redirect()->route('job-seeker-my-account')->with('error', 'Passwords do not match');
                    }
                }
                else{
                    return redirect()->route('job-seeker-my-account')->with('error', 'No Changes Made');
                }
            }
        }
        else{
            return redirect()->route('job-seeker-my-account')->with('error', 'Incorrect Password');
        }
        }
        catch(\Exception $e){
            return redirect()->route('job-seeker-my-account')->with('error', 'Something went wrong');
        }
        // try{
        //     $CompanyName = $request->CompanyName;
        //     $new_email = $request->new_email;
        //     $new_email_conf = $request->new_email_conf;
        //     $current_password = $request->current_password;
        //     $new_password = $request->new_password;
        //     $new_password_conf = $request->new_password_conf;
        //     $update_data = Employer::where('EmployerID', session('employer_session'))->first();
        //     if(Hash::check($current_password,$update_data->PasswordHash)){
        //         if($CompanyName != null){
        //             $update_data->CompanyName = $CompanyName;
        //         }
        //         if($new_email != null && $new_email_conf!=null){
        //             if($new_email == $new_email_conf){
        //                 #check if email already exists
        //                 $check_email = Employer::where('BusinessEmail', $new_email)->first();
        //                 if($check_email){
        //                     return redirect()->route('employers-my-account')->with('error', 'Email Already Exists');
        //                 }
        //                 $update_data->BusinessEmail = $new_email;
        //                 if($new_password != null && $new_password_conf!=null){
        //                     if($new_password == $new_password_conf){
        //                     $update_data->PasswordHash = Hash::make($new_password);
        //                     }
        //                     else{
        //                         return redirect()->route('employers-my-account')->with('error', 'Passwords do not match');
        //                     }
        //                 }
        //                 $update_data->update();
        //                 return redirect()->route('employers-my-account')->with('success', 'Account Updated Successfully');
        //             }
        //             else{
        //                 return redirect()->route('employers-my-account')->with('error', 'Emails do not match');
        //             }
        //         }
        //         else{
        //             if($new_password != null && $new_password_conf!=null){
        //                 if($new_password == $new_password_conf){
        //                     $update_data->PasswordHash = Hash::make($new_password);
        //                     $update_data->update();
        //                     return redirect()->route('employers-my-account')->with('success', 'Account Updated Successfully');
        //                 }
        //                 else{
        //                     return redirect()->route('employers-my-account')->with('error', 'Passwords do not match');
        //                 }
        //             }
        //             else{
        //                 return redirect()->route('employers-my-account')->with('error', 'No Changes Made');
        //             }
        //         }
        //     }
        //     else{
        //         return redirect()->route('employers-my-account')->with('error', 'Current Password is Incorrect');
        //     }
        //     }
        //     catch(\Exception $e){
        //         return redirect()->route('employers-my-account')->with('error', 'Something went wrong');
        //     }
    }
}
