<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index(){

            $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){  
        //especify the Model and the Wilcads that comes from web (routes) as  /posts/{**post**}



        return view('posts.show',compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);

        Post::create(request(['title','body']));

        // and then redirect to the home page

        return redirect('/');
    }

    public function iothome(){

        $viewTitle= 'Consumer IoT';  
        $posts = Post::latest()->where('category', 1)->get();
        
        return view('posts.index', compact('posts'));

    }

    public function iotindustry(){
        
        $viewTitle= 'Industry IoT';  
        
        $posts = Post::latest()->where('category', 2)->get();
        
        return view('posts.index', compact('posts','viewTitle'));

    }

    public function iotvalue(){

        $viewTitle= 'The Value of IoT';
        
        $posts = Post::latest()->where('category', 4)->get();
        
        return view('posts.index', compact('posts'));

    }
}
