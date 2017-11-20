@extends('layouts.app')

@section('content')
    <div class="post__container com-xs-12 col-sm-8 col-sm-offset-2">
        <h1>{{$post->title}}</h1>
        <small>Written by {{$post->created_at}}</small>
        <p>{!!$post->content!!}</p>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open([
            'action' => [
                    'PostsController@destroy',
                    $post->id
                ],
            'method' => 'POST',
            'class' => 'pull-right'
        ]) !!}
            {{ Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    </div>
@endsection