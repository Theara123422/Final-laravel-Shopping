<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
   public function index($id){
        return view('news-detail');
   }
}
