<?php

namespace App\Http\Controllers;


use view;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Employer;
use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Exists;

class PaymentController extends Controller
{
    public function stripe($amount)
    {   
        $seeker_session = session('seeker_session');
        $employer_session = session('employer_session');
        if(isset($seeker_session) || isset($employer_session)){
            if(session()->has('seeker_session')){
                $user_data = JobSeeker::where('JobSeekerID', $seeker_session)->first();
                if($user_data->SubsType != 0){
                    return redirect()->route('home')->with('success', 'You already have a subscription.');
                }
                else{
                    try{
                        if($amount == "Basic"){
                            $amount = 1;
                        }
                        elseif($amount == "Premium"){
                            $amount = 25;
                        }
                        elseif($amount == "Enterprise"){
                            $amount = 50;
                        }
                        else{
                            return redirect()->route('home')->with('error', 'Invalid Request.');
                        }
                        return view('stripe', compact('amount'));
                    }
                        catch(\Exception $e){
                            return redirect()->route('home')->with('error', $e->getMessage());
                        }
                }
            }
            elseif(session()->has('employer_session')){
                $user_data = Employer::where('EmployerID', $employer_session)->first();
                if($user_data->SubsType != 0){
                    return redirect()->route('home')->with('success', 'You already have a subscription.');
                }
                else{
                    try{
                        if($amount == "Basic"){
                            $amount = 1;
                        }
                        elseif($amount == "Premium"){
                            $amount = 25;
                        }
                        elseif($amount == "Enterprise"){
                            $amount = 50;
                        }
                        else{
                            return redirect()->route('home')->with('error', 'Invalid Request.');
                        }
                        return view('stripe', compact('amount'));
                    }
                        catch(\Exception $e){
                            return redirect()->route('home')->with('error', $e->getMessage());
                        }
                }
            }
            else{
                return redirect()->route('home')->with('error', 'Invalid Request.');
            }
        }
        else{
            return redirect()->route('home')->with('error', 'Please login first.');
        }
    }
    // Session::flash('success', 'Payment successful!');
    public function stripePost(Request $request)
    {
        try{
            $amount = intval($request->input('amount'));
            $seeker_session = session('seeker_session');
            $employer_session = session('employer_session');
            if($amount == 1){
                Stripe::setApiKey(env('STRIPE_SECRET'));
                Charge::create ([
                        "amount" => $amount * 100,
                        "currency" => "usd",
                        "source" => $request->stripeToken,
                        "description" => "Test payment to opensaas." 
                ]);
                if(isset($seeker_session)){
                    $seeker = JobSeeker::find($seeker_session);
                    $seeker->SubsType = 1;
                    $seeker->SubsSrtDate = date("Y-m-d");
                    $seeker->SubsEndDate = date("Y-m-d", strtotime("+1 month"));
                    $seeker->SubsDay = (strtotime($seeker->SubsEndDate) - strtotime($seeker->SubsSrtDate)) / (60 * 60 * 24);
                    $seeker->save();
                }
                elseif(isset($employer_session)){
                    $employer = Employer::find($employer_session);
                    $employer->SubsType = 1;
                    $employer->SubsSrtDate = date("Y-m-d");
                    $employer->SubsEndDate = date("Y-m-d", strtotime("+1 month"));
                    $employer->SubsDay = (strtotime($employer->SubsEndDate) - strtotime($employer->SubsSrtDate)) / (60 * 60 * 24);
                    $employer->save();
                }
                else{
                    return redirect()->route('home')->with('error', 'Invalid Request.');
                }
            }
            elseif($amount == 25){
                Stripe::setApiKey(env('STRIPE_SECRET'));
                Charge::create ([
                        "amount" => $amount * 100,
                        "currency" => "usd",
                        "source" => $request->stripeToken,
                        "description" => "Test payment to opensaas." 
                ]);
                if(isset($seeker_session)){
                    $seeker = JobSeeker::find($seeker_session);
                    $seeker->SubsType = 2;
                    $seeker->SubsSrtDate = date("Y-m-d");
                    $seeker->SubsEndDate = date("Y-m-d", strtotime("+1 month"));
                    $seeker->SubsDay = (strtotime($seeker->SubsEndDate) - strtotime($seeker->SubsSrtDate)) / (60 * 60 * 24);
                    $seeker->save();
                }
                elseif(isset($employer_session)){
                    $employer = Employer::find($employer_session);
                    $employer->SubsType = 2;
                    $employer->SubsSrtDate = date("Y-m-d");
                    $employer->SubsEndDate = date("Y-m-d", strtotime("+1 month"));
                    $employer->SubsDay = (strtotime($employer->SubsEndDate) - strtotime($employer->SubsSrtDate)) / (60 * 60 * 24);
                    $employer->save();
                }
                else{
                    return redirect()->route('home')->with('error', 'Invalid Request.');
                }
            }
            elseif($amount == 50){
                Stripe::setApiKey(env('STRIPE_SECRET'));
                Charge::create ([
                        "amount" => $amount * 100,
                        "currency" => "usd",
                        "source" => $request->stripeToken,
                        "description" => "Test payment to opensaas." 
                ]);
                if(isset($seeker_session)){
                    $seeker = JobSeeker::find($seeker_session);
                    $seeker->SubsType = 3;
                    $seeker->SubsSrtDate = date("Y-m-d");
                    $seeker->SubsEndDate = date("Y-m-d", strtotime("+1 month"));
                    $seeker->SubsDay = (strtotime($seeker->SubsEndDate) - strtotime($seeker->SubsSrtDate)) / (60 * 60 * 24);
                    $seeker->save();
                }
                elseif(isset($employer_session)){
                    $employer = Employer::find($employer_session);
                    $employer->SubsType = 3;
                    $employer->SubsSrtDate = date("Y-m-d");
                    $employer->SubsEndDate = date("Y-m-d", strtotime("+1 month"));
                    $employer->SubsDay = (strtotime($employer->SubsEndDate) - strtotime($employer->SubsSrtDate)) / (60 * 60 * 24);
                    $employer->save();
                }
                else{
                    return redirect()->route('home')->with('error', 'Invalid Request.');
                }
            }
            else{
                return redirect()->route('home')->with('error', 'Invalid Request.');
            }
            return redirect()->route('home')->with('success', 'Payment successful!');
        }
        catch(\Exception $e){
            return redirect()->route('home')->with('error', $e->getMessage());
        }
    }
//     public function stripePost(Request $request)

// {

//     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

  

//     $customer = Stripe\Customer::create(array(

//             "address" => [

//                     "line1" => "Virani Chowk",

//                     "postal_code" => "360001",

//                     "city" => "Rajkot",

//                     "state" => "GJ",

//                     "country" => "IN",

//                 ],

//             "email" => "demo@gmail.com",

//             "name" => "Hardik Savani",

//             "source" => $request->stripeToken

//          ));

  

//     Stripe\Charge::create ([

//             "amount" => 100 * 100,

//             "currency" => "usd",

//             "customer" => $customer->id,

//             "description" => "Test payment from itsolutionstuff.com.",

//             "shipping" => [

//               "name" => "Jenny Rosen",

//               "address" => [

//                 "line1" => "510 Townsend St",

//                 "postal_code" => "98140",

//                 "city" => "San Francisco",

//                 "state" => "CA",

//                 "country" => "US",

//               ],

//             ]

//     ]); 

  

//     Session::flash('success', 'Payment successful!');

           

//     return back();

// }
}