<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $request){
        // echo"<pre>";   
        // print_r($request->all());
        // echo"</pre>";   
        $request->validate(
            
            [
                'name' => 'required',
                'email' => 'required|email',
                // 'password' => 'required|confirmed',
                // 'confirm_password' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                    
            ]
            );
    }
}
