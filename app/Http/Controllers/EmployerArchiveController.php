<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerArchiveController extends Controller
{
    public function developerlook_index(){
        $employer_data = Employer::query()->orderBy('EmployerID')->paginate(10);
        return view('employers-archive', compact('employer_data'));
    }
}
