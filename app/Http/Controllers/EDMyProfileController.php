<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Employer;
use Illuminate\Http\Request;

class EDMyProfileController extends Controller
{
    public function developerlook_index(){
        if(session()->has('employer_session')){
            $user_data = Employer::where('EmployerID', session('employer_session'))->first();
            return view('employer-dash-my-profile', compact('user_data'));
        }
        else{
            return redirect()->route('employers-login')->with('error', 'Please Login to Continue');
        }
    }
    public function developerlook_update_data(Request $request){
        try{
            if ($request->has('Email') && $request->filled('Email')) {
                $request->validate([
                    'Email'=>'required|email',
                ]);
            }
            if($request->has('PhoneNumber') && $request->filled('PhoneNumber')){
                $request->validate([
                    'PhoneNumber'=>'required|numeric',
                ]);
            }
            $update_data = Employer::where('EmployerID', session('employer_session'))->first();
            $update_data->FullName = $request->FullName;
            $update_data->CompanyName = $request->CompanyName;
            $update_data->WebsiteURL = $request->WebsiteURL;
            $update_data->Email = $request->Email;
            $update_data->LinkedInURL = $request->LinkedInURL;
            $update_data->PhoneNumber = $request->PhoneNumber;
            $update_data->Location = $request->Location;
            // dd($request->input('AboutCompany'));
            $update_data->AboutCompany = $request->input('AboutCompany');
            $update_data->CompanyMission = $request->input('CompanyMission');
            $update_data->RoleInCompany = $request->RoleInCompany;

            if($request->hasFile('Logo')) {
                $logo_file = $request->file('Logo');
                $logo_exten = $logo_file->getClientOriginalExtension();
            
                if(!in_array($logo_exten, ['png', 'jpg', 'jpeg', 'gif', 'svg'])) {
                    return redirect()->route('employers-my-profile')->with('error', 'Invalid Logo File');
                }
            
                $logo_name = 'logo' . time() . '.' . $logo_exten;
                $logo_file->move(public_path('src/upload_image'), $logo_name);
                $update_data->Logo = $logo_name;
            }
            if ($request->hasFile('Banner')) {
                $banner_file = $request->file('Banner');
                $banner_exten = $banner_file->getClientOriginalExtension();
            
                if (!in_array($banner_exten, ['png', 'jpg', 'jpeg', 'gif', 'svg'])) {
                    return redirect()->route('employers-my-profile')->with('error', 'Invalid Banner File');
                }
            
                $banner_name = 'banner' . time() . '.' . $banner_exten;
                $banner_file->move(public_path('src/upload_image/'), $banner_name);
                $update_data->Banner = $banner_name;
            }
            $update_data->update();
            return redirect()->route('employers-my-profile')->with('success', 'Profile Updated Successfully');
        }
        catch(Exception $e){
            return redirect()->route('employers-my-profile')->with('error', 'Something Went Wrong');
        }
    }
}
