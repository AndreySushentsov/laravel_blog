@extends('layouts.app')

@section('content')
    <div class="post__container com-xs-12 col-sm-8 col-sm-offset-2">
        <h1>{{$post->title}}</h1>
        <img src="{{$post->cover_image}}">
        <small>Written by {{$post->created_at}}</small>
        <p>{!!$post->content!!}</p>
        <hr>
    </div>
@endsection