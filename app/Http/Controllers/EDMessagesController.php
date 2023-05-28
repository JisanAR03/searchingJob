<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EDMessagesController extends Controller
{
    public function developerlook_index(){
        return view('employer-dash-messages');
    }
}
