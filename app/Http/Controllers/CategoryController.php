<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('category')
            ->orderBy('id', 'desc')->get();
        return view('category.list', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:30'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $result = DB::table('category')
            ->insert([
                'category_name' => $request->name
            ]);

        if ($result) {
            return redirect('/list-category')->with('success', 'Add Category Success');
        }
    }

    public function destroy($id)
    {
       $result = DB::table('category')->where('id',$id)->delete();

       if($result){
            return response()->json([
                'success' => 'Deleted success'
            ]);
       }
    }
}
