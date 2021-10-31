@extends('layout') 
@section('title') page @endsection
@section('maincontent')
<h1 class="text-white"> page</h1>

@foreach ($posts as $el)
    
<div class="alert alert-warning">
    <h3>{{ $el }}</h3>

</div>
    

@endforeach


@endsection