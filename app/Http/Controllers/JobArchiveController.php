<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class JobArchiveController extends Controller
{
    public function developerlook_index(){
        $job_data = JobPost::query()->orderBy('JobPostID')->paginate(10);
        return view('jobs-archive', compact('job_data'));
    }
}
