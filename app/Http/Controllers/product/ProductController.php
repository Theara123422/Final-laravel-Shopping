<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    public function submitAddProduct(Request $request){
        $validator = Validator::make($request->all() , [
            'name' => 'required|string|max:200',
            'qty'  => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'size' => 'required',
            'color' => 'required',
            'category' => 'required|numeric',
            'thumbnail' => 'required|mimes:jpg,png,jpeg|max:2048',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors(
                $validator->errors()
            );
        }

        if($request->hasFile('thumbnail')){
            $thumbnail = time() .'-'. $request->file('thumbnail')->getClientOriginalName();
            if(!file_exists('./products')){
                mkdir('./products', 755 , 1);
            }
            $request->file('thumbnail')->move('./products',$thumbnail);
        }

        $result = DB::table('product')->insert([
            'name' => $request->name,
            'qty'  => $request->qty,
            'regular_price' => $request->regular_price,
            'sales_price' => $request->sale_price,
            'category_id' => $request->category,
            'color' => implode(',',$request->color),
            'size' => implode(',',$request->size),
            'thumbnail' => $thumbnail,
            'decription' => $request->description
        ]);

        if($result){
            return redirect('/product')->with('success','Create Prouct Success');
        }
    }
}
