@extends('layouts.app')

@section('content')
    <div class="post__container com-xs-12 col-sm-8 col-sm-offset-2">
        <h1>Create Post</h1>

        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-gorup">
                {{Form::label('title','Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Tilte'])}}
            </div>
            <div class="form-gorup">
                {{Form::label('content','Content')}}
                {{Form::textarea('content', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Content'])}}
            </div>
            <div class="from-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}

    </div>
@endsection