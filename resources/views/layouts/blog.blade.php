@extends('index')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())

<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
        style="cursor: pointer; alt=" {{ $posts[0]->author->username }} " onclick="
        location.href='/blog/{{ $posts[0]->slug }}'"'>
    <div class=" card-body text-center">
    <h5 class="card-title">{{ $posts[0]->title }}</h5>
    <p>
        <small class="text-muted"> By: <a href="/author/{{ $posts[0]->author->username  }}"
                class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                href="/categories/{{ $posts[0]->category->slug }}"
                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}</small></p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
</div>
</div>
@else
<p class="text-center fs-4">No post found.</p>
@endif
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card m-3">
                <div class="position-absolute mt-2 px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7); cursor:pointer; " onclick="location.href='/categories/{{ $post->category->slug }}'">
                    {{ $post->category->name }}
                </div>
                <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top"
                    style="cursor: pointer;" alt="{{ $post->author->name }}"
                    onclick="location.href='/blog/{{ $post->slug }}'">
                <div class="card-body">
                    <h5 class="card-title" style="cursor: pointer;" onclick="location.href='/blog/{{ $post->slug }}'">
                        {{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt }}.</p>
                    <a href="/author/{{ $post->author->username  }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}</p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">open</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- {{ $posts->links() }} --}}

@endsection
