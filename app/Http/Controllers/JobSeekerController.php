<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use App\Models\JobSeekerSkill;
use App\Models\Skill;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function developerlook_index(Request $request){
        $seeker_id = $request->input('id');
        $seeker = JobSeeker::find($seeker_id);
        $seeker->skills = "";
        $skills = JobSeekerSkill::where('JobSeekerID', $seeker_id)->get();
        foreach($skills as $skill){
            $skill_name = Skill::where('SkillID', $skill->SkillID)->first();
            $seeker->skills .= $skill_name->SkillName . ", ";
        }
        return view('job-seekers-single', compact('seeker'));
        // dd($seeker);
        // return view('job-seekers-single');
    }
}
