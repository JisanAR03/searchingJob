<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EDMyAccountController extends Controller
{
    public function developerlook_index(){
        return view('employer-dash-my-account');
    }
}
