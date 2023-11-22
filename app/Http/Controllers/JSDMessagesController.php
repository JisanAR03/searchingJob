<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Employer;
use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class JSDMessagesController extends Controller
{
    public function developerlook_index(Request $request){
        if ($request->route('param1') && $request->route('param2')) {
            $param1 = $request->route('param1');
            $param2 = $request->route('param2');
            // dd($param1, $param2);
            $employer = Employer::all();
            $jobseeker = JobSeeker::all();
            $selected_user = $param1.$param2;
            // i need all data together
            $user_data = $employer->concat($jobseeker);
            $id = 1;
            foreach($user_data as $user){
                $user->type = $user->getTable();
                if($user->FullName != null){
                    $user->name = $user->FullName;
                }
                if(isset($user->JobSeekerID)){
                    $user->tableid = $user->JobSeekerID;
                } 
                if(isset($user->EmployerID)){
                    $user->tableid = $user->EmployerID;
                }
                $user->id = $id;
                $id++;
            }
            if(session()->has('employer_session')){
                $usertype = "Employers";
                $userid = session('employer_session');
            }
            elseif(session()->has('seeker_session')){
                $usertype = "JobSeekers";
                $userid = session('seeker_session');
            }
            else{
                return redirect()->route('job-seekers-login');
            }
            $reciever_datas = Message::where(function ($query) use ($usertype, $userid) {
                $query->where('receiver_type', $usertype)
                    ->where('receiver_id', $userid);
            })
            ->orWhere(function ($query) use ($usertype, $userid) {
                $query->where('sender_type', $usertype)
                    ->where('sender_id', $userid);
            })
            ->get();
        $filtered = [];
            foreach($reciever_datas as $reciever_data){
                if($reciever_data->sender_type == $usertype && $reciever_data->sender_id == $userid){
                    if($reciever_data->receiver_type == "Employers"){
                        // check exist on filtered array
                        if(in_array('Employers'.$reciever_data->receiver_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = Employer::where('EmployerID', $reciever_data->receiver_id)->first()->FullName;
                        $reciever_data->type = "Employers";
                        $reciever_data->tableid = $reciever_data->receiver_id;
                        array_push($filtered, 'Employers'.$reciever_data->receiver_id);
                        }
                    }
                    elseif($reciever_data->receiver_type == "JobSeekers"){
                        if(in_array('JobSeekers'.$reciever_data->receiver_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = JobSeeker::where('JobSeekerID', $reciever_data->receiver_id)->first()->FullName;
                        $reciever_data->type = "JobSeekers";
                        $reciever_data->tableid = $reciever_data->receiver_id;
                        array_push($filtered, 'JobSeekers'.$reciever_data->receiver_id);
                        }
                    }
                }
                if($reciever_data->receiver_type == $usertype && $reciever_data->receiver_id == $userid){
                    if($reciever_data->sender_type == "Employers"){
                        if(in_array('Employers'.$reciever_data->sender_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = Employer::where('EmployerID', $reciever_data->sender_id)->first()->FullName;
                        $reciever_data->type = "Employers";
                        $reciever_data->tableid = $reciever_data->sender_id;
                        array_push($filtered, 'Employers'.$reciever_data->sender_id);
                        }
                    }
                    elseif($reciever_data->sender_type == "JobSeekers"){
                        if(in_array('JobSeekers'.$reciever_data->sender_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = JobSeeker::where('JobSeekerID', $reciever_data->sender_id)->first()->FullName;
                        $reciever_data->type = "JobSeekers";
                        $reciever_data->tableid = $reciever_data->sender_id;
                        array_push($filtered, 'JobSeekers'.$reciever_data->sender_id);
                        }
                    }
                }
            }
            $user_all_msg = [];
            $all_msg = Message::all();
            if (session()->has('seeker_session')) {
                $sessionName = 'JobSeekers';
                $sessionData = session('seeker_session');
            } elseif(session()->has('employer_session')) {
                $sessionName = 'Employers';
                $sessionData = session('employer_session');
            }
            else{
                return redirect()->route('job-seekers-login');
            }
            foreach($all_msg as $msg){
                if($msg->sender_type == $param1 && $msg->sender_id == $param2 && $msg->receiver_type == $sessionName && $msg->receiver_id == $sessionData){
                    array_push($user_all_msg, $msg);
                }
                if($msg->sender_type == $sessionName && $msg->sender_id == $sessionData && $msg->receiver_type == $param1 && $msg->receiver_id == $param2){
                    array_push($user_all_msg, $msg);
                }
            }
            $collection = new Collection($user_all_msg);
            $sortedCollection = $collection->sortBy('created_at');
            if($param1 == "Employers"){
                $selected_user_data = Employer::where('EmployerID', $param2)->first();
                $reciever_name = "Employers";
                $reciever_name_id = $param2;
            }
            elseif($param1 == "JobSeekers"){
                $selected_user_data = JobSeeker::where('JobSeekerID', $param2)->first();
                $reciever_name = "JobSeekers";
                $reciever_name_id = $param2;
            }
            else{
                return redirect()->route('job-seekers-login');
            }
            foreach($sortedCollection as $msg){
                if($msg->sender_type == $param1 && $msg->sender_id ==$param2){
                    $msg->sender_name = $selected_user_data->FullName;
                }
                else{
                    $msg->sender_name = "You";
                }
            }
            return view('job-seeker-dash-message', compact('user_data', 'reciever_datas', 'selected_user','sortedCollection','selected_user_data','reciever_name','reciever_name_id'));
        }
        else{
            $employer = Employer::all();
            $jobseeker = JobSeeker::all();
            // i need all data together
            $user_data = $employer->concat($jobseeker);
            $id = 1;
            foreach($user_data as $user){
                $user->type = $user->getTable();
                if($user->FullName != null){
                    $user->name = $user->FullName;
                }
                if(isset($user->JobSeekerID)){
                    $user->tableid = $user->JobSeekerID;
                } 
                if(isset($user->EmployerID)){
                    $user->tableid = $user->EmployerID;
                }
                $user->id = $id;
                $id++;
            }
            if(session()->has('employer_session')){
                $usertype = "Employers";
                $userid = session('employer_session');
            }
            elseif(session()->has('seeker_session')){
                $usertype = "JobSeekers";
                $userid = session('seeker_session');
            }
            else{
                return redirect()->route('job-seekers-login');
            }
            $reciever_datas = Message::where(function ($query) use ($usertype, $userid) {
                $query->where('receiver_type', $usertype)
                    ->where('receiver_id', $userid);
            })
            ->orWhere(function ($query) use ($usertype, $userid) {
                $query->where('sender_type', $usertype)
                    ->where('sender_id', $userid);
            })
            ->get();
        // dd($reciever_datas);
        $filtered = [];
            foreach($reciever_datas as $reciever_data){
                if($reciever_data->sender_type == $usertype && $reciever_data->sender_id == $userid){
                    if($reciever_data->receiver_type == "Employers"){
                        // check exist on filtered array
                        if(in_array('Employers'.$reciever_data->receiver_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = Employer::where('EmployerID', $reciever_data->receiver_id)->first()->FullName;
                        $reciever_data->type = "Employers";
                        $reciever_data->tableid = $reciever_data->receiver_id;
                        array_push($filtered, 'Employers'.$reciever_data->receiver_id);
                        }
                    }
                    elseif($reciever_data->receiver_type == "JobSeekers"){
                        if(in_array('JobSeekers'.$reciever_data->receiver_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = JobSeeker::where('JobSeekerID', $reciever_data->receiver_id)->first()->FullName;
                        $reciever_data->type = "JobSeekers";
                        $reciever_data->tableid = $reciever_data->receiver_id;
                        array_push($filtered, 'JobSeekers'.$reciever_data->receiver_id);
                        }
                    }
                }
                if($reciever_data->receiver_type == $usertype && $reciever_data->receiver_id == $userid){
                    if($reciever_data->sender_type == "Employers"){
                        if(in_array('Employers'.$reciever_data->sender_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = Employer::where('EmployerID', $reciever_data->sender_id)->first()->FullName;
                        $reciever_data->type = "Employers";
                        $reciever_data->tableid = $reciever_data->sender_id;
                        array_push($filtered, 'Employers'.$reciever_data->sender_id);
                        }
                    }
                    elseif($reciever_data->sender_type == "JobSeekers"){
                        if(in_array('JobSeekers'.$reciever_data->sender_id, $filtered)){
                            continue;
                        }
                        else{
                        $reciever_data->sender_name = JobSeeker::where('JobSeekerID', $reciever_data->sender_id)->first()->FullName;
                        $reciever_data->type = "JobSeekers";
                        $reciever_data->tableid = $reciever_data->sender_id;
                        array_push($filtered, 'JobSeekers'.$reciever_data->sender_id);
                        }
                    }
                }
            }
            return view('job-seeker-dash-message', compact('user_data', 'reciever_datas'));
        }
    }
    public function developerlook_send_msg(Request $request){
        if(strlen($request->input('message'))>0){
            Message::create($request->all());
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
    public function developerlook_delete_msg(Request $request){
        $employerId = $request->input('receiver_id');
        $employer = $request->input('receiver_type');
        $seekerId = $request->input('sender_id');
        $seeker = $request->input('sender_type');
        $query = Message::query();
    
        if ($employerId && $employer && $seekerId && $seeker) {
            $query->where(function ($query) use ($employerId, $employer, $seekerId, $seeker) {
                $query->where('receiver_id', $employerId)
                      ->where('receiver_type', $employer)
                      ->where('sender_id', $seekerId)
                      ->where('sender_type', $seeker);
            })->orWhere(function ($query) use ($employerId, $employer, $seekerId, $seeker) {
                $query->where('receiver_id', $seekerId)
                      ->where('receiver_type', $seeker)
                      ->where('sender_id', $employerId)
                      ->where('sender_type', $employer);
            });
        }
    
        $results = $query->get();
        // Delete the retrieved results
        $results->each(function ($result) {
            $result->delete();
        });
        return redirect()->back();
    }
}