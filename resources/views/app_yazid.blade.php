<!doctype html>
<html lan="ar">
<head>
	<meta charset="UTF-8">
    @yield('includes')
    
	<title>@yield('page-title')</title>
</head>
<body>
	<div>
		@yield('header-cont')
	</div>
    
    <div>
        @yield('main-cont')
    </div>
    
    <div>
        @yield('footer-cont')
    </div>
        
        @yield('js-includes')
        
</body>

</html>