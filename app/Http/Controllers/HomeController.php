<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latestProducts    = Product::orderBy('id','desc')->limit(4)->get();
        $promotionProducts = Product::orderBy('id','desc')->where('sales_price','>',0)->limit(4)->get();
        $mostViewsProducts = Product::orderBy('views','desc')->limit(4)->get();
        return view('home', compact('latestProducts','promotionProducts','mostViewsProducts'));
    }
}
