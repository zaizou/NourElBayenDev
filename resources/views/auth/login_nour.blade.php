<!DOCTYPE html>
<html class="login-content" style="direction: rtl">
<head>
    <title>تـــسجيل الدخول</title>
    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/material-design-iconic-font/material-design-iconic-font.min.css') }}"
          rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.2.css') }}" rel="stylesheet">

</head>

<body class="login-content">
<!-- Login -->
<div class="lc-block toggled" id="l-login">

    <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-back"></i></a>

    <div class="input-group m-b-20">

        <div class="fg-line" style="direction:RTL;">
            <input type="text" class="form-control" placeholder="إسم المستخدم">
        </div>

        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

    </div>

    <div class="input-group m-b-20">

        <div class="fg-line">
            <input type="password" style="direction:RTL;" class="form-control" placeholder="كلمة المرور">
        </div>
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
    </div>

    <div class="clearfix"></div>

    <div class="pull-right checkbox">
        <label>
            <input type="checkbox" value="">
            <i class="input-helper"></i>
            أبقني متصلا
        </label>
    </div>



    <ul class="login-navigation">
        <li data-block="#l-register" class="bgm-red">تـــسجيل</li>
        <li data-block="#l-forget-password" class="bgm-orange">نــسيت كلمة المرور ? </li>
    </ul>
</div>

<!-- Register 
<div class="lc-block" id="l-register">
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

        <div class="fg-line">
            <input type="text" class="form-control" placeholder="Username">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>

        <div class="fg-line">
            <input type="text" class="form-control" placeholder="Email Address">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>

        <div class="fg-line">
            <input type="password" class="form-control" placeholder="Password">
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="checkbox">
        <label>
            <input type="checkbox" value="">
            <i class="input-helper"></i>
            Accept the license agreement
        </label>
    </div>

    <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-back"></i></a>

    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">Login</li>
        <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
    </ul>
</div>

<!-- Forgot Password -->
<div class="lc-block" id="l-forget-password">
    <p class="text-left">بــعد إدخال  عنوانك البريدي ستصلك رسالة لتغيير كلمة المرور الخصة بك</p>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>

        <div class="fg-line">
            <input type="text" class="form-control" placeholder="العنوان البريدي">
        </div>
    </div>

    <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-back"></i></a>


    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">دخـــول</li>
        <li data-block="#l-register" class="bgm-red">تـــسجيل</li>
    </ul>


</div>



<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/waves.min.js') }}"></script>
<!--<script type="text/javascript" src="{{ URL::asset('js/jquery.bootstrap.wizard.min.js') }}"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>

</body>

</html>





