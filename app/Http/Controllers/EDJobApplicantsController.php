<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Models\JobSeeker;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class EDJobApplicantsController extends Controller
{
    public function developerlook_index(Request $request){

        $job_applicant_data = JobApplication::all();
        $job_applicant_final_data = new Collection();

        foreach ($job_applicant_data as $job_applicant) {
            $filter_job = JobPost::where('JobPostID', $job_applicant->JobPostID)->first();
            if ($filter_job->EmployerID == session('employer_session')) {
                $job_applicant_final_data->push($job_applicant);
            }
        }

        // Create a paginator instance for the $job_applicant_final_data collection
        $perPage = 5; // Number of items to display per page
        $currentPage = request()->input('page', 1); // Get the current page number from the request
        $pagedData = $job_applicant_final_data->forPage($currentPage, $perPage);
        $paginator = new LengthAwarePaginator($pagedData, $job_applicant_final_data->count(), $perPage, $currentPage);

        foreach ($paginator as $job_applicant) {
            $seeker_data = JobSeeker::where('JobSeekerID', $job_applicant->JobSeekerID)->first();
            $seeker_data->experience = "";
            $workStart = \Carbon\Carbon::parse($seeker_data->WorkStart);
            $workEnd = \Carbon\Carbon::parse($seeker_data->WorkEnd);
            
            $diff = $workStart->diff($workEnd);
            $years = $diff->format('%y');
            $months = $diff->format('%m');
            
            if ($years > 0) {
                $seeker_data->experience .= $years . " year";
                if ($years > 1) {
                    $seeker_data->experience .= "s";
                }
            }
            
            if ($months > 0) {
                if ($years > 0) {
                    $seeker_data->experience .= " ";
                }
                $seeker_data->experience .= $months . " month";
                if ($months > 1) {
                    $seeker_data->experience .= "s";
                }
            }
            $seeker_data->skills_data = DB::table('JobSeekerSkills')->where('JobSeekerID', $job_applicant->JobSeekerID)->get();
            // add all skill one by one using comma 
            $seeker_data->skill_name = "";
            foreach ($seeker_data->skills_data as $skill) {
                $skill->skill_name = DB::table('Skills')->where('SkillID', $skill->SkillID)->first()->SkillName;
                $seeker_data->skill_name .= $skill->skill_name . ", ";
            }
            $job_applicant->seeker_data = $seeker_data;
        }

        // Pass the $paginator to the view
        return view('employer-dash-job-applicant', ['application_data' => $paginator]);
        // return view('employer-dash-job-applicant');
    }
    public function developerlook_delete_applicants(Request $request){
        $application_id = $request->input('id');
        $application_data = JobApplication::query()->where('JobApplicationID', $application_id)->first();
        $application_data->delete();
        return redirect()->route('job-applicants')->with('success', 'Application Deleted Successfully');
    }
}
