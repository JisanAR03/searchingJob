<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function developerlook_index(){
        return view('home');
    }
    public function developerlook_logout(Request $request){
        $request->session()->flush();
        return redirect()->route('home')->with('success', 'Logout Successfully');
    }
}