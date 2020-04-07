<?php

namespace App\Http\Controllers;
use App\Registration;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function onLogin(Request $request){
        $password = $request->input('password');
        $username = $request->input('username');
        $userCount = Registration::where(['username'=>$username, 'password'=>$password])->count();
        if($userCount==1){
            $key = env('TOKEN_KEY');
            $payload = array(
                "site" => "http://demo.com",
                "user" => $username,
                "iat" => time(),
                "exp" => time()+3600
            );            
            $jwt = JWT::encode($payload, $key);
            return response()->json(['Token'=>$jwt,'Status'=>'Login Success!']);
        }
        else{
            return "Wrong Username Or Password";
        }
    }
}
