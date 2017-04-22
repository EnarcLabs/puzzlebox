<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index(){
        $posts = Post::All();
        return response()->json($posts);
    }
}
