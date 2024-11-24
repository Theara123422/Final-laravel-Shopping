<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function index(){
        return view('backend.product.product');
    }

    public function addProduct(){
        $row = DB::table('category')->orderByDesc('id')->get(['id','name']); 
        // return $row;
        return view('backend.product.add_product',['row'=>$row]);
    } 
}
