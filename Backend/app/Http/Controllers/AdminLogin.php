<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminLogin extends Controller
{
    public function login(){
        // $a = bcrypt('12345');
        // var_dump($a);
        return view('Login');
     }
     public function postlogin(Request $request){
        $arr= ['email' => $request->email, 'password' => $request->password];
        
        $remember= false;
        if($request->remember == 'Remember'){
            $remember = true;
        }else{
            $request = false;
        }
        if( Auth::attempt($arr,$remember) ){
             return redirect('/all');
        }else{
            return back()->withInput()->with('error', 'email or pass not correct');
        }
     }
}
