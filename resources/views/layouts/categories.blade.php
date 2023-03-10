@extends('index')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row mb-5">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/blog?category={{ $category->slug }}" class="text-decoration-none">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img " alt="{{ $category->name }}">
                    <div class="card-img d-flex align-item-center p-0">
                      <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0,0,0,0.7)"><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
        <a href="/blog" >back to blog</a>
    </div>

@endsection

