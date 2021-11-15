<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">

    {{--TODO:
     the meta tag below added for use csrftoken in ckeditor_config.js and resolve 419 error.
     We must also add:
         const CSRFToken = $('meta[name="csrf-token"]').attr('content');
     to ckeditor_config.js saeed doc.--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/all.css')}}">


</head>
<body>


@include('partials.header')
{{--<div class="container">--}}
{{--    @yield('content')--}}
{{--</div>--}}


<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light text-right sidebar collapse" dir="rtl">
            <div class="sidebar-sticky pt-3">

                {{--                 What does double question mark (??) operator mean in PHP--}}
                {{--                 $foo = $bar ?? 'something';--}}
                {{--                 $foo = isset($bar) ? $bar : 'something';--}}
                {{--                 https://stackoverflow.com/questions/53610622/what-does-double-question-mark-operator-mean-in-php--}}

                {{--                @foreach($posts as $post)--}}
                @foreach($posts ?? array() as $post)
                    <div class="container" class="row">
                        <div class="col-md-12 text-right">

                            <p><a href="{{ route('blog.post', ['id' => $post->id]) }}">{{ $post->title }}</a></p>
                        </div>
                    </div>
                @endforeach

            </div>
        </nav>

        <main role="main" class="col-md-9 mr-sm-auto col-lg-9 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
            <div class="container">
                @yield('content')
            </div>
            <br>
            <br>
            <br>


        </main>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>

