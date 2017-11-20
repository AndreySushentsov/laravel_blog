@extends('layouts.app')

@section('content')
    <div class="post__container com-xs-12 col-sm-8 col-sm-offset-2">
        <h1>Edit Post</h1>

        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-gorup">
            {{Form::label('title','Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Tilte'])}}
        </div>
        <div class="form-gorup">
            {{Form::label('content','Content')}}
            {{Form::textarea('content', $post->content, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Content'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}

    </div>
@endsection