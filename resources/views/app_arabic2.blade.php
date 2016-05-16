<!doctype html>
<html lan="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('css/material-design-iconic-font/material-design-iconic-font.min.css') }}"
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.2.css') }}" rel="stylesheet">
    @yield('includes')
    <title>@yield('page_title')</title>
</head>
<body>
@yield('header')

<section>
    @yield('section')
</section>

<footer>
    @yield('footer')
</footer>
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/waves.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/functions2.js') }}"></script>
@yield('js_includes')

</body>

</html>