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

        $file = $request->file('p_image');
        $path = './image/';
        $filename = time() .'-'. $file->getClientOriginalName();
        $file->move($path,$filename);
        // query builder
        $result = DB::table('product')->insert(
            [
                'name' => $request -> p_name,
                'qty'  => $request -> p_qty,
                'price'=> $request -> p_price,
                'remark' => $request -> p_remark,
                'total'=> $request -> p_qty * $request->p_price,
                'image' => $filename
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

    public function submitEditProduct(Request $request){
        if ($request->hasFile('updated_image')) {
            $newFile = $request->file('updated_image');
            $newFileName = time() . '-' . $newFile->getClientOriginalName();
            $newFile->move('./image/',$newFileName);
        }else{
            $newFileName = $request->old_image;
        }
        $result = DB::table('product')
                    ->where('id',$request -> updated_id)
                    ->update([
                        'name' => $request -> updated_name,
                        'qty'  => $request -> updated_qty,
                        'price'=> $request->  updated_price,
                        'remark' => $request -> updated_remark,
                        'total' => $request -> updated_qty * $request -> updated_price,
                        'image' => $newFileName
                    ]);    
        if($result){
            return redirect('/');
        }  
    }

    public function removeProduct($id){
        return view('Product.remove',['id' => $id]);
    }

    public function submitDeleteProduct(Request $request){
        $result   =  DB::table('product')
                     ->where('id',$request -> del_id)
                     ->delete();
        if($result){
            return redirect('/');
        }
    }
}
