<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('authentication.register');
    }

    public function createUser(Request $request){
        $validate = $request -> validate([
            'name' => 'required|unique:users,name',
            'email'   => 'required',
            'password' => [
                'required',
                'min:8',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                'confirmed'
            ],
            'profile' => [
                'required',
                'mimes:jpg,jpeg,png',
                'max:1000'
            ]
        ]);

        $image = $request -> file('profile');
        // $destination  =  './upload';
        // if(!file_exists($destination)){
        //     mkdir('./upload', 0777 , 1);
        // }
        $filename = date('YmdHms') .'-'. $image->getClientOriginalName();
        // $image->move($destination , $filename);

        $result = DB::table('users')->insert([
            'name'              => $validate['name'],
            'email'             => $validate['email'],
            'password'          => Hash::make( $validate['password']),
            'profile'           => $filename,
            'email_verified_at' => now()
        ]);

        if($result){
            return redirect()->route('login');
        }
        else{
            return redirect()->back()->with('error','User Registered Failed');
        }
    }

    public function login(){
        return view('authentication.login');
    }
}
