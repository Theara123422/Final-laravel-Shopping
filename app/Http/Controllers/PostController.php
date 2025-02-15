<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('home',compact('posts'));
    }

    public function addPost(){
        return view('create');
    }

    public function submitAddPost(Request $request){
        $title = $request -> p_name;
        $description = $request -> p_desc;
        $image = $request -> file('p_image');

        $filename = time() .'-'. $image->getClientOriginalName();

        $image->move('./image',$filename);

        $result = Post::create([
            'title' => $title,
            'description' => $description,
            'image' => $filename
        ]);

        if($result){
            return redirect('/');
        }
    }
}
