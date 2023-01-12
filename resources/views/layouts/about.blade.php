@extends('index')

@section('container')
    <h1>halaman {{ $title }}</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $img }}" alt="{{ $name }}" width="200">
@endsection