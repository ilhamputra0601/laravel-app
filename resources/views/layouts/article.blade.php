@extends('index')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p> By: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden; ">
                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid"  alt=" {{ $post->author->username }} ">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"  alt=" {{ $post->author->username }} ">
            @endif
        <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>
            <a href="/blog" class="block">kembali</a>
        </div>
    </div>
</div>





@endsection

