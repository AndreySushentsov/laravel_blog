<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <!-- Styles -->
</head>
<body>
<header class="bs-docs-nav navbar navbar-inverse" id=top>
    <div class=container>
        <div class=navbar-header>
            <button aria-controls=bs-navbar aria-expanded=false class="collapsed navbar-toggle" data-target=#bs-navbar data-toggle=collapse type=button> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button> <a href=../ class=navbar-brand>Basic Laravel</a> </div>
        <nav class="collapse navbar-collapse" id=bs-navbar>
            <ul class="nav navbar-nav">
                <li> <a href=/about/>About</a>
                </li>
                <li> <a href=/posts/>Blog</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/posts/create/'>Create Post</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container">
    @include('elements.messages')
    @yield('content')
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

</body>
</html>