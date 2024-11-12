<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }
    public function register(){
        return view('backend.auth.register');
    }

    public function submitRegister(Request $request){
        $username = $request -> input('name');
        $email    = $request -> input('email');
        $password = $request -> input('password');
        $profile  = $request -> file('profile');

        $path     = './assets/image';
        $image    = time() .'-'. $profile->getClientOriginalName();
        $profile  -> move($path,$image);

        $result   = DB::table('users')->insert([
            'name' => $username,
            'email'=> $email,
            'password'=>Hash::make($password),
            'profile'=>$image
        ]);
        if($result){
            return redirect()->route('login');
        }
    }
    public function submitLogin(Request $request){
        $email_username = $request->input('name_email');
        $password       = $request->input('password');

        if(Auth::attempt(['name'=>$email_username,'password'=>$password])){
            return redirect()->route('dashboard');
        }
        if(Auth::attempt(['email'=>$email_username,'password'=>$password])){
            return redirect()->route('dashboard');
        }
        else{
            return back()->withErrors(['message'=>'failed to login'])->onlyInput('email');
        }
    }
}
