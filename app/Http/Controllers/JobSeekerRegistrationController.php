<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekerRegistrationController extends Controller
{
    public function developerlook_index(){
        return view('job-seekers-registration');
    }
}
