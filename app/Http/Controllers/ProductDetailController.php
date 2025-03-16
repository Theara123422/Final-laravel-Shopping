<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::findOrFail($id);
        return view('product-detail', compact('product'));
    }
}
