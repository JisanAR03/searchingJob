<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerArchiveController extends Controller
{
    public function developerlook_index(Request $request){
        $name = $request->input('CompanyName');
        $location = $request->input('location');
        if($name != null && $location != null){
            $employer_data = Employer::query()->where('CompanyName', 'LIKE', '%'.$name.'%')->where('Location', 'LIKE', '%'.$location.'%')->orderBy('EmployerID')->paginate(10);
        }
        elseif($name != null){
            $employer_data = Employer::query()->where('CompanyName', 'LIKE', '%'.$name.'%')->orderBy('EmployerID')->paginate(10);
        }
        elseif($location != null){
            $employer_data = Employer::query()->where('Location', 'LIKE', '%'.$location.'%')->orderBy('EmployerID')->paginate(10);
        }
        else{
            $employer_data = Employer::query()->orderBy('EmployerID')->paginate(10);
        }
        return view('employers-archive', compact('employer_data'));
    }
}
