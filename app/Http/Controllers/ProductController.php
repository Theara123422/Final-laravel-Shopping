<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        //query builder (model)
        $rows = DB::table('product')->get();
        return view('home',['datas' => $rows]);
    }

    public function createProduct(){
        return view('create');
    }

    public function submitCreateProduct(Request $request){
        $name = $request -> p_name;
        $qty  = $request -> p_qty;
        $price= $request -> p_price;
        $remark = $request -> p_remark;
        $image  = $request -> file('p_image');

        $file  = time() .'-'. $image -> getClientOriginalName();

        $image->move('./images/' , $file);

        $result  =  DB::table('product')
                    ->insert(
                        [
                            "name"    => $name,
                            "qty"     => $qty,
                            "price"   => $price,
                            "remark"  => $remark,
                            "image"   => $file
                        ]
                    );
        if($result){
            return redirect('/');
        }
    }

    public function editProduct($id){
        $row = DB::table('product')
               ->where('id' , $id)
               ->get();
        return view('edit',['data' => $row]);
    }

    public function submitEditProduct(Request $request){
        $id   = $request -> updated_id;
        $name = $request -> updated_name;
        $qty  = $request -> updated_qty;
        $price= $request -> updated_price;
        $remark = $request -> updated_remark;

        if($request -> hasFile('updated_image')){
            $image = $request -> file('updated_image');
            $file  = time() .'-'. $image -> getClientOriginalName();
            $image -> move('./images' , $file);
        }
        else{
            $file  = $request -> old_image;
        }

        $result  =  DB::table('product')
                    -> where('id', $id)
                    ->update([
                        'name' => $name,
                        'qty' => $qty,
                        'price' => $price,
                        'remark' => $remark,
                        'image' => $file
                    ]);
        if($result){
            return redirect('/');
        }
        else{
            return "Error";
        }
    }

    public function removeProduct($id){
        return view('delete',['id' => $id]);
    }
}
