<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function developerlook_index(Request $request){
    $employer_id = $request->id;
    $employer_data = Employer::where('EmployerID', $employer_id)->first();
    return view('employers-single', compact('employer_data'));
    }
}
