<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientShoppingController extends Controller
{
    public function index(){
        $ListLatestProduct      = DB::table('product')
                                    ->orderBy('id','desc')
                                    ->limit(4)
                                    ->get();
        $ListPromotionProduct   = DB::table('product')
                                    ->whereRaw('sale_price < regular_price')
                                    ->limit(4)
                                    ->get();

        // return $ListPromotionProduct;
        return view('frontend.home',
                    ['ListLatestProduct' => $ListLatestProduct,
                           'ListPromotionProduct',$ListPromotionProduct]);
    }
    public function shops(){
        return view('frontend.shop');
    }

    public function news(){
        return view('frontend.news');
    }

    public function productDetail($id){
        DB::table('product')
            ->where('id',$id)
            ->increment('views',1);
        $row = DB::table('product')
                 ->where('id',$id)
                 -> get();
        $relatedProduct = DB::table('product')
                            ->where('id','<>',$id)
                            ->where('category_id',$row[0]->category_id)
                            ->get();
        // return $relatedProduct;
        return view('frontend.product-detail',['row'=>$row,'relatedProduct'=>$relatedProduct]);
    }

    public function search(){
        return view('frontend.search');
    }

    public function article(){
        return view('frontend.news-detail');
    }
}
