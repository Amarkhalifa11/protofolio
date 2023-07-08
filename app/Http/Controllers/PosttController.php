<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PosttController extends Controller
{
    public function single_post($id){
        $posts = Post::find($id);
        return view('frontend.single_post' , compact('posts'));
    }


    public function category($id){
        $categories = Category::all();
        $posts = Post::where('category_id' , $id)->get();
        return view('frontend.protofolio' , compact('posts' , 'categories'));
        
    }
}
