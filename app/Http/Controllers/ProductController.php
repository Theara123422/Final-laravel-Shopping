<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('view');
    }

    public function create_product(){
        return view('create');
    }

    public function submit_product(Request $request){
        
        $validated = $request -> validate([
            'name' => 'required|max:255',
            'brand' => 'required|unique:posts',
            'description' => 'required|max:255'
        ]);

        $result  =  DB::table('product')
                    ->insert([
                        'name' => $validated['p_name'],
                        
                    ]);

    }
}
