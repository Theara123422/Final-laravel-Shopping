<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index(Request $request){
        $filter = $request -> filter;
        $products = Product::where('name','like','%'.$filter.'%')->get();
        return view('search-result',compact('products'));
    }
}
