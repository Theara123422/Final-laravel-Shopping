<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function submitRegister(Request $request){
        $validate = $request -> validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:100',
            'password' => 'required|unique:users|max:10',
            'role' => 'required'
        ]);
        $result = DB::table('users')
                    ->insert([
                        'name' => $validate['name'],
                        'email' => $validate['email'],
                        'password' => Hash::make($validate['password']),
                        'role' => $validate['role']
                    ]);   
        if($result){
            return redirect('/login');
        }
    }

    public function login(){
        return view('login');
    }

    public function submitLogin(Request $request){
        $email = $request -> email;
        $password = $request -> password;

        if(Auth::attempt(['email' => $email,'password' => $password])){
            return redirect('/')->with('success' , 'Login Successfully');
        }
        else{
            return redirect()->back()->with('error' , 'Login Failed');
        }
    }
}
