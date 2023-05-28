<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerRegistrationController extends Controller
{
    public function developerlook_index(){
        return view('employers-registration');
    }
}
