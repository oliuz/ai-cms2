<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'AICMS')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700" rel="stylesheet">
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" />
</head>

<body>
    <div id="contextWrap">
        @include('layouts.parts.leftmenu')
        @include('layouts.parts.rightmenu')
        <div class="pusher">
            @include('layouts.parts.navbar')
            <div class="mainWrap navslide">
                <div class="ui equal width left aligned padded grid stackable">
                    <!--Site Content-->

                    @yield('content')
                    <!--Site Content-->
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/semantic.min.js') }}"></script>
    <script src="{{asset('js/js.cookie-2.2.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/pace.js')}}" data-pace-options='{ "ajax": false }'></script>
    <script src="{{asset('js/admin.js')}}"></script>
</body>

</html>