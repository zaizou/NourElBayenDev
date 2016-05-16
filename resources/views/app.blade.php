<!doctype html>
<html lan="en">
<head>
	<meta charset="UTF-8">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<title>Document hello</title>
	

</head>
<body>
	<div class="container">
		@yield('content')
	</div>
    <br>
    <br>
    <br>
        <br>
    <div class="container">
        @yield('footer')
    </div>
        
</body>

</html>