<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EDJobPostFormController extends Controller
{
    public function developerlook_index(){
        return view('employer-dash-job-post-form');
    }
}
