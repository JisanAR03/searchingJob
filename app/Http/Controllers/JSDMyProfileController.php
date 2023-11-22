<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\JobSeeker;
use Illuminate\Http\Request;
use App\Models\JobSeekerSkill;

class JSDMyProfileController extends Controller
{
    public function developerlook_index(){
        if(session()->has('seeker_session')){
            $user_data = JobSeeker::where('JobSeekerID', session('seeker_session'))->first();
            $check_existSkills = JobSeekerSkill::where('JobSeekerID', session('seeker_session'))->get();
            if(count($check_existSkills) > 0){
                $existSkills_all = Skill::whereIn('SkillID', $check_existSkills->pluck('SkillID'))->get();
                $existSkills = $existSkills_all->pluck('SkillName','SkillID')->toArray();
            }
            else{
                $existSkills = [];
            }
            // dd($existSkills);
            return view('job-seeker-dash-my-profile',compact('user_data' , 'existSkills'));
        }
        else{
            return redirect()->route('job_seekers_login')->with('error', 'Please Login to Continue');
        } 
    }
    public function developerlook_update_data(Request $request){
        try{
            if($request->has('skill_ids') && $request->filled('skill_ids')){
                $skill_ids = $request->skill_ids;
                $check_seeker_skill_exist = JobSeekerSkill::where('JobSeekerID', session('seeker_session'))->get();
                if(count($check_seeker_skill_exist) > 0){
                    foreach($check_seeker_skill_exist as $check_seeker_skill_exist_data){
                        $check_seeker_skill_exist_data->delete();
                    }
                }
                if(count($skill_ids) > 0){
                    foreach($skill_ids as $skill_id){
                        $insert_data = new JobSeekerSkill;
                        $insert_data->JobSeekerID = session('seeker_session');
                        $insert_data->SkillID = $skill_id;
                        $insert_data->save();
                    }
                }
            }
            if($request->has('Email') && $request->filled('Email')){
                $request->validate([
                    'Email'=>'required|email',
                ]);
            }
            if($request->hasFile('ProfilePhoto')){
                $profile_photo_file = $request->file('ProfilePhoto');
                $profile_photo_exten = $profile_photo_file->getClientOriginalExtension();
                if(!in_array($profile_photo_exten, ['png', 'jpg', 'jpeg', 'gif', 'svg'])) {
                    return redirect()->route('job-seeker-my-profile')->with('error', 'Invalid Profile Photo File');
                }
            
                $profile_photo_name = 'profile_photo' . time() . '.' . $profile_photo_exten;
                $profile_photo_file->move(public_path('src/upload_image'), $profile_photo_name);
            }
            if($request->has('PhoneNumber') && $request->filled('PhoneNumber')){
                $request->validate([
                    'PhoneNumber'=>'required|numeric',
                ]);
            }
            if($request->hasFile('Resume')){
                $resume_file = $request->file('Resume');
                $resume_exten = $resume_file->getClientOriginalExtension();
            
                if(!in_array($resume_exten, ['pdf', 'doc', 'docx'])) {
                    return redirect()->route('job-seeker-my-profile')->with('error', 'Invalid Resume File');
                }
            
                $resume_name = 'resume' . time() . '.' . $resume_exten;
                $resume_file->move(public_path('src/upload_resume'), $resume_name);
            }
            $update_data = JobSeeker::where('JobSeekerID', session('seeker_session'))->first();
            if($request->has('FullName') && $request->filled('FullName')){
                $update_data->FullName = $request->FullName;
            }
            if($request->has('Email') && $request->filled('Email')){
                $update_data->Email = $request->Email;
            }
            if($request->has('PhoneNumber') && $request->filled('PhoneNumber')){
                $update_data->PhoneNumber = $request->PhoneNumber;
            }
            if($request->has('Location') && $request->filled('Location')){
                $update_data->Location = $request->Location;
            }
            if($request->has('WorkTitle') && $request->filled('WorkTitle')){
                $update_data->WorkTitle = $request->WorkTitle;
            }
            if($request->has('WorkingFor') && $request->filled('WorkingFor')){
                $update_data->WorkingFor = $request->WorkingFor;
            }
            if($request->has('LinkedInURL') && $request->filled('LinkedInURL')){
                $update_data->LinkedInURL = $request->LinkedInURL;
            }
            if($request->has('CurrentCompanyName') && $request->filled('CurrentCompanyName')){
                $update_data->CurrentCompanyName = $request->CurrentCompanyName;
            }
            if($request->has('WorkStart') && $request->filled('WorkStart')){
                $work_start = date('Y-m-d', strtotime($request->WorkStart));
                $update_data->WorkStart = date('Y-m-d', strtotime($request->WorkStart));
            }
            if($request->has('WorkEnd') && $request->filled('WorkEnd')){
                $work_end = date('Y-m-d', strtotime($request->WorkEnd));
                $update_data->WorkEnd = $work_end;
            }
            if($request->has('AppExperienceReview') && $request->filled('AppExperienceReview')){
                $update_data->AppExperienceReview = $request->AppExperienceReview;
            }
            if($request->has('SalaryExpectation') && $request->filled('SalaryExpectation')){
                $update_data->SalaryExpectation = $request->SalaryExpectation;
            }
            if($request->has('AvailableForWork') && $request->filled('AvailableForWork')){
                $update_data->AvailableForWork = $request->AvailableForWork;
            }
            else{
                $update_data->AvailableForWork = 0;
            }
            if($request->has('MessagePermit') && $request->filled('MessagePermit')){
                $update_data->MessagePermit = $request->MessagePermit;
            }
            else{
                $update_data->MessagePermit = 0;
            }
            if($request->hasFile('ProfilePhoto')){
                $update_data->ProfilePhoto = $profile_photo_name;
            }
            if($request->hasFile('Resume')){
                $update_data->Resume = $resume_name;
            }
            $update_data->update();
            return redirect()->route('job-seeker-my-profile')->with('success', 'Profile Updated Successfully');
        }
        catch(\Exception $e){
            return redirect()->route('job-seeker-my-profile')->with('error', 'Something is Wrong');
        }
    }
    public function developerlook_search(Request $request)
    {
        $term = $request->input('term');
    
        $skills = Skill::where('SkillName', 'LIKE', '%' . $term . '%')->select('SkillID', 'SkillName')->get();
    
        $formattedSkills = [];
    
        foreach ($skills as $skill) {
            $formattedSkills[] = [
                'id' => $skill->SkillID,
                'label' => $skill->SkillName,
                'value' => $skill->SkillName,
            ];
        }
    
        return response()->json($formattedSkills);
    }
    

}
