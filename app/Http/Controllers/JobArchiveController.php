<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobArchiveController extends Controller
{
    public function developerlook_index(){
        return view('jobs-archive');
    }
}
