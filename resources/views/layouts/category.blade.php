@extends('index')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <h2 ><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
    <p> By: <a href="/authors/{{ $post->author->username  }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read more ...</a>
</article>
@endforeach
<a href="/categories">Back to categories</a>
@endsection
