<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EDMyJobController extends Controller
{
    public function developerlook_index(){
        return view('employer-dash-my-job');
    }
}
