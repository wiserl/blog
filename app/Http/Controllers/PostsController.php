<?php

namespace App\Http\Controllers;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except(['index', 'show']);

    }



    public function index(Posts $posts)
{
    
if (request(['month', 'year'])) {
$posts=$posts->all();

// ->filter(request(['month', 'year']))
// ->get();
} else {
$posts = Post::latest()->get();
}
        

        
        
        // $archives = Post::archives();

        return view('posts.index',compact ('posts', 'archives'));
    }

    public function show(Post $post){

       
        return view('posts.show', compact('post'));

        
    }


    public function create()
    {

        return view('posts.create');
    }

    public function store(){

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);


        auth()->user()->publish(

new Post(request(['title', 'body']))

        );

       





        return redirect('/');
    }
}
