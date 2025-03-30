<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::findOrFail($id);
        $product -> views = $product -> views + 1;
        $product -> save();
        return view('product-detail', compact('product'));
    }
}
