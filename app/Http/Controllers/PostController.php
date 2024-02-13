<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
    return view('private.post.create');
    }
    
    public function store(Request $request)
    {

        $create = Post::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => 'default',
            'description' => $request->description,
 
           ]);
    
    
           return view('/');
    }
}
