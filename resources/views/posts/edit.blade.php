@extends('layout')
@section('content')
<h1>Edit Player </h1>
<div class="container my-5">
<form method="Post" action="{{route('posts.update',['post'=>$post->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group "><label for="title">Client Name</label>
        <input class="form-control" name=title id="title" type="text" value="{{old('title',$post->title)}}"></div>
    <div class="form-group "><label for="content">Client id</label>
        <input class="form-control" name="content" id="content" type="text" value="{{old('content',$post->content)}}"></div>
    <div class="form-group "><label for="slug">Client Plan</label>
        <input class="form-control" name="slug" id="slug" type="text" value="{{old('slug',$post->slug)}}"></div>
    <div><label for="active">Status</label>
        <input class="form-control" name="active" id="active" type="text" value="{{old('active',$post->active)}}"></div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
        <div class="d-flex justify-content-center mt-3">
        <button class="btn btn-block btn-warning" type="submit"> Update Client </button>
        </div>
</form>
</div>

@endsection