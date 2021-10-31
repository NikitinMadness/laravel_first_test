@extends('layout') 
@section('title') posts @endsection
@section('maincontent')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<h1 class="text-white">posts page</h1>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/posts/check" method="post">
    @csrf
    <input type="text" name="title" id="title" class="form-control">
    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    <button type="submit" class="btn btn-success">create post</button>
</form>

<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection



                
