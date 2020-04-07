<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function onRegister(Request $request){
        $fname = $request->input("fname");
        $lname = $request->input("lname");
        $city = $request->input("city");
        $username = $request->input("username");
        $password = $request->input("password");
        $gender = $request->input("gender");
        $userCount = Registration::where('username',$username)->count();
        if($userCount!=0){
            return 'User Already Exists';
        }
        else{
            $result = Registration::insert([
                'fname'=>$fname,
                'lname'=>$lname,
                'city'=>$city,
                'username'=>$username,
                'password'=>$password,
                'gender'=>$gender
            ]);
            if($result==true){
                return "Data Save Success";
            }
            else{
                return "Data Save Fail! Try Again";
            }
        }
    }
}
