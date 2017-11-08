<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Computer
        </title>
        <link rel="stylesheet" href="/css/app.css">

        <script src="sliderengine/jquery.js"></script>
        <script src="sliderengine/amazingslider.js"></script>
        <script src="sliderengine/initslider-1.js"></script>


    </head>
    <body>
        @include('inc.navbar')

            {{--login system--}}
        {{--<div class="flex-center position-ref full-height">--}}
                {{--@if (Route::has('login'))--}}
                    {{--<div class="top-right links">--}}
                        {{--@if (Auth::check())--}}
                            {{--<a href="{{ url('/home') }}">Home</a>--}}
                        {{--@else--}}
                            {{--<a href="{{ url('/login') }}">Login</a>--}}
                            {{--<a href="{{ url('/register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--@endif--}}
        {{--</div>--}}

    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('inc.messages')
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright 2017 &copy; Rupak Shrestha</p>
    </footer>
    </body>
</html>