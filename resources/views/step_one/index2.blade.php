@extends('app_yazid')

@section('includes')
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.min.1.css">
    <link rel="stylesheet" href="css/app.min.2.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/material-design-iconic-font/material-design-iconic-font.min.css">
@stop

@section('page-title')
El Bayen Website
@stop

@section('header-cont')

<div id="header" class="clearfix" data-current-skin="red" style="background-color: #E91E63">
        <ul class="header-inner">
            
            <li class="pull-right logo hidden-xs">
                        <a>البيان</a>
            </li>
            
            
            <li class="pull-right">
                <ul class="top-menu">
                    <li ><a><span style="font-size: 18px" class="tm-label">شروط الإنتساب</span><i  style="font-size: 20px" class="zmdi zmdi-ruler zmdi-hc-fw"></i></a></li>
                    <li ><a><span style="font-size: 18px" class="tm-label">محفزات الأكاديمية</span><i style="font-size: 20px" class="zmdi zmdi-compass zmdi-hc-fw"></i></a></li>
                    <li ><a><span style="font-size: 18px" class="tm-label"> التعريف بالأكاديمية</span><i style="font-size: 20px" class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i></a></li>
                    
                    
                </ul>
            </li>
            
        </ul>
        
        <div class="header"></div>

    </div>

@stop

@section('main-cont')
    
    <div id="main" data-layout="layout-1">
        <div class="row">
        <div class="col-sm-offset-1 col-sm-10" id="pub">
                <div class="flexslider" >
                  <ul class="slides">
                    <li>
                      <img src="img/img1.jpg" />
                    </li>
                    <li>
                      <img src="img/img2.jpg" />
                    </li>
                    <li>
                      <img src="img/img1.jpg" />
                    </li>
                    <li>
                      <img src="img/img2.jpg" />
                    </li>
                  </ul>
                </div>
            
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-offset-5 col-sm-2" id="logreq">
            
                <button style="background-color: #E91E63" class="btn btn-primary col-sm-2  btn-block btn-lg wave-effect">مستخدم جديد</button>
                <button style="background-color: #E91E63" class="btn btn-primary btn-block col-sm-2 btn-lg wave-effect">تسجيل</button>
            
        </div>
        </div>
        
    </div>


@stop

@section('footer-cont')
@stop


@section('js-includes')
<script src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript">
        // Can also be used with $(document).ready()
        $(document).ready(function() {
          $('.flexslider').flexslider({
            animation: "slide"
          });
        });
      </script>
    <script src="js/waves.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/jquery.flexslider.js"></script>

@stop

