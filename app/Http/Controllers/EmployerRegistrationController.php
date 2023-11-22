<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployerRegistrationController extends Controller
{
    public function developerlook_index(){
        return view('employers-registration');
    }
    public function developerlook_employer_store(Request $request)
{   
    $validator = Validator::make($request->all(), [
        'business_email' => 'required|email|unique:Employers,BusinessEmail',
        'password' => 'required|min:8',
    ]);
    if($validator->fails()){
        return redirect()->route('employer_registration')->with('error', 'Invalid Email or Password');
    }
    else{
        Employer::create(['BusinessEmail' => $request->business_email,'PasswordHash' => Hash::make($request->password),]);
        return redirect()->route('home')->with('success', 'Account Created Successfully');
    }
}
}
