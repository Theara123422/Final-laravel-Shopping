[<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
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
        else{
            return redirect()->back()->with('message','Invaild Credential, Failed to login');
        }
    }
    public function submitLogin(Request $request){
        $email_username = $request->input('name_email');
        //sok,sok123@gmail.com
        $password       = $request->input('password');

        if(Auth::attempt(['name'=>$email_username,'password'=>$password])){
            // Session::flash('message','login success');
            return redirect()->route('dashboard');
        }
        elseif(Auth::attempt(['email'=>$email_username,'password'=>$password])){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->with('message','Invaild Credential, Failed to login');
        }
    }
    public function logout(){
        return view('backend.auth.logout');
    }
    public function submitLogout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');

    }
}
