@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($skills) > 0)
        <div class="row">
            {{--<ul class="list-group col-xs-12">--}}
                {{--@foreach($skills as $skill)--}}
                    {{--<li class="list-group-item col-xs-3">{{$skill}}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
            @foreach($skills as $skill)
                <div class="col-xs-3">
                    <div class="skill__item">
                        {{$skill}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection