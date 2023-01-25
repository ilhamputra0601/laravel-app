<?php

namespace App\Http\Controllers;
use App\Models\Post;
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
            "active" => "home",
        ]);
    }
    public function about()
    {
        return view('layouts.about',[
            "title" => "About",
            "active" => "about",
            "name" => "Ilham Ramadhan",
            "email" => "ilhamputra0601@gmail.com",
            "img" => "img\hamz.jpg",
        ]);
    }
    public function blog()
    {
        return view('layouts.blog',[
            "title" => "All Posts",
            'active' =>"blog",
            "posts" => Post::latest()->paginate(9)
        ]);
    }
    public function article(Post $post)
    {
        return view('layouts.article',[
            "title" => "Article",
            'active' =>"blog",
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
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
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
