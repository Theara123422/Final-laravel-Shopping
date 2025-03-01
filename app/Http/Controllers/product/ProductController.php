<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('product as p')
                    ->join('category as c','p.category_id','=','c.id')
                    ->select(
                        'p.*',
                        'c.category_name'
                    )
                    ->get();

        return view('products.list', compact('products'));
    }

    public function create(){
        $categories = DB::table('category')->get();
        return view('products.create', compact('categories'));
    }
}
