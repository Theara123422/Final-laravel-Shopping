<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index(){
        
        $row  =  DB::table('product')
                    ->get();

        return view('Product.show',['datas' => $row]);
    }

    public function addProduct(){
        return view('Product.add');
    }

    public function submitProduct(Request $request){
        //query builder
        $result = DB::table('product')->insert(
            [
                'name' => $request -> p_name,
                'qty'  => $request -> p_qty,
                'price'=> $request -> p_price,
                'remark' => $request -> p_remark,
                'total'=> $request -> p_qty * $request->p_price
            ]
        );
        if($result){
            return redirect('/');
        }
    }

    public function detailProduct($id){
        $row = DB::table('product')
                ->where('id',$id)
                ->get();
        return view('Product.detail',['data' => $row]);
    }

    public function updateProduct($id){
        $updatedProduct = DB::table('product')
                          ->where('id',$id)
                          ->get();
        return view('Product.update',['data'=>$updatedProduct]);
    }
}
