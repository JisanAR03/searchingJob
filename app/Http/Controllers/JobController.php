<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function developerlook_index(){
        return view('jobs-single');
    }
}
