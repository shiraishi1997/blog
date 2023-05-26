<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     public function index(Post $post)
    {
    return view('posts.index')->with(['posts'=>$post->get()]);
    }
    public function getBylimited(int $limited_list = 5){
     return $this-> orderBy('uplodated_at','DESC')->take($limited_count)->get();    
    }
}
