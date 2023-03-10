<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('layouts.home',[
            "title" => "Home",
        ]);
    }
    public function about()
    {
        return view('layouts.about',[
            "title" => "About",
            "name" => "Ilham Ramadhan",
            "email" => "ilhamputra0601@gmail.com",
            "img" => "img\hamz.jpg",
        ]);
    }

    public function index()
    {
        // testter req search
        // dd(request('search'));
        $title='';

        if (request('category')) {
            $category = Category::firstWhere('slug',request('category'));
            $title =' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username',request('author'));
            $title =' by ' . $author->name;
        }
        return view('layouts.blog',[
            "title" => "All Posts". $title,
            "posts" =>Post::latest()->filter(request(['search','category','author']))->paginate(10)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('layouts.article',[
            "title" => "Article",
            "post" => $post
        ]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
