<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EDJobApplicantsController extends Controller
{
    public function developerlook_index(){
        return view('employer-dash-job-applicant');
    }
}
