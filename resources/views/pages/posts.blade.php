@extends('layouts.app')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well col-xs-8 col-xs-offset-2">
                <a href="/posts/{{$post->id}}">
                    <h3>{{$post->title}}</h3>
                </a>
                <span>{{$post->created_at}}</span>
            </div>
        @endforeach
    @else
        <p>Posts not found</p>
    @endif
@endsection