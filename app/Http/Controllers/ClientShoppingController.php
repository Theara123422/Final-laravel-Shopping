<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientShoppingController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function shops(){
        return view('frontend.shop');
    }

    public function news(){
        return view('frontend.news');
    }
}
