<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekerLoginController extends Controller
{
    public function developerlook_index(){
        return view('job-seekers-login');
    }
}
