@extends('layouts.app')
@extends('layout') 
@section('title') home @endsection
@section('maincontent')
<h1 class="text-white">home page</h1>

<h2 class="text-white">last posts</h2>

@foreach ($posts as $el)
<div class="alert alert-warning">
    <h3>{{ $el->title }}</h3>
    <p>{{ $el->content }}
        <a href="article">{{ $el->id }}read more</a>
    </p>

</div>
    
@endforeach

@endsection