<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $row = DB::table('category')->get();
        return view('backend.category.category',['row'=>$row]);
    }
    public function addCategory(){
        return view('backend.category.add-category');
    }
    public function submitCategory(Request $request){
        $name = $request -> input('name');

        $result = DB::table('category')->insert(
            ['name' => $name]
        );

        if($result){
            return redirect()->route('category.view');
        }
    }
}
