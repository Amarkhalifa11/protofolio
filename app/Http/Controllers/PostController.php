<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function all_posts()
    {
        $posts = Post::all();
        return view('backend.posts.all_posts' , compact('posts'));
    }

    public function create()
    {
        return view('backend.posts.add_post');
    }

    public function store(PostRequest $request)
    {
        $title        = $request->title;
        $date         = $request->date;
        $url	      = $request->url;
        $client       = $request->client;
        $category_id  = $request->category_id;
        $description  = $request->description;


                //2 uploade image 
 
                $post_image1 = $request->file('image1'); 
 
                $name_gen = hexdec(uniqid()); 
                $img_ext = strtolower($post_image1->getClientOriginalExtension()); 
                $img_name = $name_gen . '.' . $img_ext; 
                 
                $upload_location = 'frontend\assets\img\portfolio'; 
                $image1 = $img_name; 
                $post_image1->move($upload_location,$img_name); 

                        //2 uploade image 
 
        $post_image2 = $request->file('image2'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($post_image2->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend\assets\img\portfolio'; 
        $image2 = $img_name; 
        $post_image2->move($upload_location,$img_name); 

                //2 uploade image 
 
                $post_image3 = $request->file('image3'); 
 
                $name_gen = hexdec(uniqid()); 
                $img_ext = strtolower($post_image3->getClientOriginalExtension()); 
                $img_name = $name_gen . '.' . $img_ext; 
                 
                $upload_location = 'frontend\assets\img\portfolio'; 
                $image3 = $img_name; 
                $post_image3->move($upload_location,$img_name); 


        $posts = Post::create([
            'title'       => $title,
            'date'        => $date,
            'url'         => $url,
            'client'      => $client,
            'category_id' => $category_id,
            'description' => $description,
            'image1'      => $image1,
            'image2'      => $image2,
            'image3'      => $image3,
        ]);

        $posts->save();
        return redirect()->route('dashboard.all_posts');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.posts.edit_post' , compact('post'));
    }

    public function update(PostRequest $request,$id)
    {
        $title        = $request->title;
        $date         = $request->date;
        $url	      = $request->url;
        $client       = $request->client;
        $category_id  = $request->category_id;
        $description  = $request->description;


                //2 uploade image 
 
                $post_image1 = $request->file('image1'); 
 
                $name_gen = hexdec(uniqid()); 
                $img_ext = strtolower($post_image1->getClientOriginalExtension()); 
                $img_name = $name_gen . '.' . $img_ext; 
                 
                $upload_location = 'frontend\assets\img\portfolio'; 
                $image1 = $img_name; 
                $post_image1->move($upload_location,$img_name); 

                        //2 uploade image 
 
        $post_image2 = $request->file('image2'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($post_image2->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend\assets\img\portfolio'; 
        $image2 = $img_name; 
        $post_image2->move($upload_location,$img_name); 

                //2 uploade image 
 
                $post_image3 = $request->file('image3'); 
 
                $name_gen = hexdec(uniqid()); 
                $img_ext = strtolower($post_image3->getClientOriginalExtension()); 
                $img_name = $name_gen . '.' . $img_ext; 
                 
                $upload_location = 'frontend\assets\img\portfolio'; 
                $image3 = $img_name; 
                $post_image3->move($upload_location,$img_name); 

        $posts = Post::find($id);

        $posts->update([
            'title'       => $title,
            'date'        => $date,
            'url'         => $url,
            'client'      => $client,
            'category_id' => $category_id,
            'description' => $description,
            'image1'      => $image1,
            'image2'      => $image2,
            'image3'      => $image3,
        ]);

        $posts->save();
        return redirect()->route('dashboard.all_posts');
    }

    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect()->route('dashboard.all_posts');

    }
}
