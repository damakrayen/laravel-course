@extends('layout')
@section('content')

<h2> {{$post->title }}</h2>
<p> {{$post->content}}</p>
<em>{{$post->created_at}}</em>
<span>{{$post->active}}</span>


@endsection