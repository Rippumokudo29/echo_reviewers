<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
    public function top(Category $category)
    {
        return view('posts/top')->with(['categories' => $category->get()]);
    }
    
    
    public function show(Category $category)
    {
        return view('posts/show') -> with(['category' => $category]);
    }
    
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('/', $image);
        return redirect('/posts/' . $post->id);
    }
    
    public function test(Request $request)
    {
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('/', $image);
        dd(Storage::disk('s3')->url($path));
    }

}
