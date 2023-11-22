<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JSDMessagesController extends Controller
{
    public function developerlook_index(){
        return view('chatsys');
        // return view('job-seeker-dash-message');
    }
}
