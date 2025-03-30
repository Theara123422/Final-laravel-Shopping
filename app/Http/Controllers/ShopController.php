<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $listCategories = Category::all();
        $products       = Product::paginate(3);
        return view('shop', compact('listCategories','products'));
    }

    public function filterProduct(Request $request){
        $category_id = $request -> category;

        $products = Product::orderBy('id','desc')->where('category_id','=',$category_id)->get();

        return view('partials.products', compact('products'));
    }
}
