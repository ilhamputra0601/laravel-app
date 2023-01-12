@extends('index')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    @foreach ($categories as $category)
    <ul class="border-bottom mb-4 ">
        <li class="pb-3">
            <h1 ><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h1>
        </li>
    </ul>
    @endforeach
    <a href="/blog" >back to blog</a>
@endsection

