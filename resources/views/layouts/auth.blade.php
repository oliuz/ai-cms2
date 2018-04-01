<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'AICMS')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
</head>
<body>
    <div class="ui container" style="padding-top:10%" id="app">
        <div class="ui grid center aligned">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/semantic.min.js') }}"></script>
    <script src="{{asset('js/js.cookie-2.2.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/pace.js')}}" data-pace-options='{ "ajax": false }'></script>
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    <script>
        var colors = ["#FFB700", "#FF6200", "#5F6C20",
            "#00A9FF", "#54FFA9", "#B7FF46",
            "#2a7fff", "#00d455", "#37c837"];
        var rand = Math.floor(Math.random() * colors.length);
        $('body').css("background-color", colors[rand]);
    </script>
</body>
</html>