@extends('app_yazid')

@section('includes')
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/app.min.1.css">
    <link rel="stylesheet" href="css/app.min.2.css">



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
                    <li><a><span style="font-size: 18px" class="tm-label">شروط الإنتساب</span><i style="font-size: 20px"
                                                                                                 class="zmdi zmdi-ruler zmdi-hc-fw"></i></a>
                    </li>
                    <li><a><span style="font-size: 18px" class="tm-label">محفزات الأكاديمية</span><i
                                    style="font-size: 20px" class="zmdi zmdi-compass zmdi-hc-fw"></i></a></li>
                    <li><a><span style="font-size: 18px" class="tm-label"> التعريف بالأكاديمية</span><i
                                    style="font-size: 20px" class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i></a></li>


                </ul>
            </li>

        </ul>

        <div class="header"></div>

    </div>

@stop

@section('main-cont')

    <div id="main"  data-layout="layout-1">
        <div class="row">
            <div class="col-md-offset-1 col-sm-10   ">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/img2.jpg" alt="">

                            <div class="carousel-caption">
                                <h3>أكاديـــمية نور البيان</h3>

                                <p>أكاديميـــة تعليم القرآن الكريم</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/img1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="img/img2.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="zmdi zmdi-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="zmdi zmdi-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--
        <div class="row">
        <div class="col-sm-offset-5 col-sm-2" id="logreq">
            
                <button style="background-color: #E91E63" class="btn btn-primary col-sm-2  btn-block btn-lg wave-effect">مستخدم جديد</button>
                <button style="background-color: #E91E63" class="btn btn-primary btn-block col-sm-2 btn-lg wave-effect">تسجيل</button>
            
        </div>
        </div>-->
        <div  class="row">

        <div class="col-md-offset-3 col-sm-2">
            <div class="mini-charts-item bgm-cyan">
                <div class="clearfix">
                    <div class="count">
                        <h3 style="color: #FFFFFF">تــســجيـــل</h3 >
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-offset-1 col-sm-2">
            <div class="mini-charts-item bgm-cyan">
                <div class="clearfix">
                    <div class="count">
                        <h3 style="color: #FFFFFF">دخــــول</h3>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>


@stop

@section('footer-cont')
@stop


@section('js-includes')
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/waves.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="js/mediaelement/build/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.sparkline.min.js"></script>
    <script src="js/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/functions2.js"></script>




@stop

