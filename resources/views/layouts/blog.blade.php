@extends('index')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            @if (request(['category','author']))
            <input type="hidden" name="category" value="{{ request('category') }}">
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit" >Search</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())

<div class="card mb-3">
    @if ($posts[0]->image)
         <div style="max-height: 400px; overflow:hidden; ">
             <img src="{{ asset('storage/'. $posts[0]->image) }}" class="img-fluid"
             style="cursor: pointer; alt=" {{ $posts[0]->author->username }} " onclick="
             location.href='/blog/{{ $posts[0]->slug }}'">
         </div>
         @else
         <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
         style="cursor: pointer; alt=" {{ $posts[0]->author->username }} " onclick="
         location.href='/blog/{{ $posts[0]->slug }}'">
         @endif

    <div class=" card-body text-center">
    <h5 class="card-title">{{ $posts[0]->title }}</h5>
    <p>
        <small class="text-muted"> By: <a href="/blog?author={{ $posts[0]->author->username  }}"
                class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                href="/blog?category={{ $posts[0]->category->slug }}"
                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}</small></p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
</div>
</div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card m-3">
                <div class="position-absolute mt-2 px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7); cursor:pointer; " onclick="location.href='/blog?category={{ $post->category->slug }}'">
                    {{ $post->category->name }}
                </div>
                @if ($post->image)

                <img src="{{ asset('storage/'. $post->image)  }}" class="card-img-top"
                    style="cursor: pointer;" alt="{{ $post->author->name }}"
                    onclick="location.href='/blog/{{ $post->slug }}'">
                @else

                <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top"
                    style="cursor: pointer;" alt="{{ $post->author->name }}"
                    onclick="location.href='/blog/{{ $post->slug }}'">
                @endif
                <div class="card-body">
                    <h5 class="card-title" style="cursor: pointer;" onclick="location.href='/blog/{{ $post->slug }}'">
                        {{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt }}.</p>
                    <a href="/blog?author={{ $post->author->username  }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/blog?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}</p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">open</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-end">
{{ $posts->links() }}
</div>

@else
@include('partials.pagenotfound')
@endif

@endsection
