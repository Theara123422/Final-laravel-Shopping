<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function index(){
        $products = DB::table('product')
                    -> join('category','product.category_id','=','category.id')
                    -> join('users','product.author_id','=','users.id')
                    -> select('product.*','category.name AS cat_name','users.name AS user_name')
                    -> orderBy('product.id','DESC')
                    -> get();
        return view('backend.product.product',['products'=>$products]);
    }

    public function addProduct(){
        $row = DB::table('category')->orderByDesc('id')->get(['id','name']); 
        // return $row;
        return view('backend.product.add_product',['row'=>$row]);
    } 

    public function submitAddProduct(Request $request){
        $name          =  $request -> input('name');
        $qty           =  $request -> input('qty');
        $regular_price =  $request -> input('regular_price');
        $sale_price    =  $request -> input('sale_price');
        $size          =  implode(',',$request -> input('size'));
        $color         =  implode(',',$request -> input('color'));
        $thumbnail     =  $request -> file('thumbnail');
        $description   =  $request -> input('description');
        $category_id   =  $request -> input('category');
        $author_id     =  $request -> input('id');      

        $path   = './assets/image';
        $image  = time() .'-'. $thumbnail -> getClientOriginalName();
        $thumbnail->move($path,$image);
        $result = DB::table('product')
                  ->insert([
                    'name' => $name,
                    'regular_price' => $regular_price,
                    'sale_price' => $sale_price,
                    'qty' => $qty,
                    'thumbnail' => $image,
                    'color' => $color,
                    'size'  => $size,
                    'description' => $description,
                    'category_id' => $category_id,
                    'author_id' => $author_id
                  ]);
        if($result){
            return redirect('/admin/product');
        }
    }
}
