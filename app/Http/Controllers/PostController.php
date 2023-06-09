<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;



class PostController extends Controller
{
     public function index(Post $post)
    {
    return view('posts.index')->with(['posts' => $post->getpaginateByLimit()]);
    }
    public function show(Post $post)
    {
    //dd($post);
    return view('posts.show')->with(['post'=>$post]);
    }
    /*public function create()
    {
    return view('posts.create');
    }
    */
    public function store(Post $post,PostRequest $request)
    {
    // dd($request);
     $input=$request['post'];
     $post->fill($input)->save();
     return redirect('/posts/'.$post->id);
    }
    public function edit(Post $post){
        //dd($post);
        return view('posts.edit')->with(['post'=>$post]);
    }
    public function update(PostRequest $request,Post $post)
    {
        //dd($request);
        $input_post=$request['post'];
        $post->fill($input_post)->save();
        
        return redirect('/posts/'.$post->id);
    }
    
    public function delete(Post $post)
    {
    $post->delete();
     return redirect('/');   
    }
    
    public function create(Category $category)
    { 
        //dd($category);
        return view('posts.create')->with(['categories'=>$category->get()]);
    }
  
}
