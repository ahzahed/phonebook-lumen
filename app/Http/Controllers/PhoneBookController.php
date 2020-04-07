<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    
    function onInsert(Request $request){
        $token = $request->input('access_token');
        $key = env('TOKEN_KEY');
        $decoded = JWT::decode($token, $key, array('HS256'));
        $decoded_array = (array)$decoded;

        $user = $decoded_array['user'];
        $pnumber1 = $request->input('pnumber1');
        $pnumber2 = $request->input('pnumber2');
        $name = $request->input('name');
        $email = $request->input('email');

        $result = Phonebook::insert([
            'username'=>$user,
            'pnumber1'=>$pnumber1,
            'pnumber2'=>$pnumber2,
            'name'=>$name,
            'email'=>$email
        ]);
        if($result==true){
            return "Data Save Success";
        }
        else{
            return "Data Save Fail! Try Again";
        }
    }

    function onSelect(Request $request){
        $token = $request->input('access_token');
        $key = env('TOKEN_KEY');
        $decoded = JWT::decode($token, $key, array('HS256'));
        $decoded_array = (array)$decoded;

        $user = $decoded_array['user'];

        $result = Phonebook::where('username',$user)->get();
        return $result;
    }
    function onDelete(Request $request){
        $email = $request->input('email');
        $token = $request->input('access_token');
        $key = env('TOKEN_KEY');
        $decoded = JWT::decode($token, $key, array('HS256'));
        $decoded_array = (array)$decoded;

        $user = $decoded_array['user'];

        $result = Phonebook::where(['username'=>$user, 'email'=>$email])->delete();
        if($result==true){
            return "Data Delete Success";
        }
        else{
            return "Data Delete Fail! Try Again";
        }
    }
}
