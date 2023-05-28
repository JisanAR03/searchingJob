<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JSDMyProfileController extends Controller
{
    public function developerlook_index(){
        return view('job-seeker-dash-my-profile');
    }
}
