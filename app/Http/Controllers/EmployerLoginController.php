<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerLoginController extends Controller
{
    public function developerlook_index(){
        return view('employers-login');
    }
}
