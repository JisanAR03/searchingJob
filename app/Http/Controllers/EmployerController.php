<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function developerlook_index(){
        return view('employers-single');
    }
}
