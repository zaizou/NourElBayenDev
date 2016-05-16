<!DOCTYPE html>
<html class="login-content" dir="RTL">
<head>
    <title>Basic Example dahs</title>
    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/material-design-iconic-font/material-design-iconic-font.min.css') }}"
          rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-select/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/chosen/chosen.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/malihu-scrollbar/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.2.css') }}" rel="stylesheet">

</head>

<body class="login-content">

<!-- page 1 personel informations  -->

<div class="lc-block" id="f-genaral-infos">

    <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-back"></i></a>


    <div class="card">

        <div class="card-header">
            <h2>
                التعريف بالطالب
                <small>الإسم و اللقب</small>
            </h2>

        </div>

        <div class="card-body">
            <div class="input-group m-b-20">

                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                <div class="fg-line" style="direction:RTL;">
                    <input type="text" class="form-control" placeholder="الإســــم">
                </div>


            </div>

            <div class="input-group m-b-20">

                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>

                <div class=" fg-line">
                    <input type="password" style="direction:RTL;" class="form-control" placeholder="اللقــب">
                </div>

            </div>

            <p class="f-500 c-black m-b-20" style="direction: rtl">العنـــوان</p>

            <div class="row">
                <div class="col-sm-4 pull-right">
                    <div class="">
                        <label>البلد</label>
                        <select class="chosen" data-placeholder="البـــلد" style="display: none;">
                            <option value="Algeria">الجزائر</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4 m-b-25 pull-right">
                    <div class="fg-line">
                        <label>الولايــــة</label>
                        <select class="chosen" data-placeholder="الولايــة">
                            <option value="United States">الجزائر العاصمة</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4 m-b-25 pull-right">
                    <label>البلدية</label>

                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="بلدية الميلاد ">
                    </div>

                </div>


            </div>


        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>المــيلاد
                <small>تاريخ ومكان الميلاد</small>
            </h2>
        </div>

        <div class="card-body">

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>

                <div class="fg-line">
                    <input type="text" style="direction:RTL;" class="form-control date-picker"
                           placeholder="تاريخ الميلاد">
                </div>

            </div>

            <div class="row">


                <div class="col-sm-4 pull-right">
                    <div class="">
                        <label>البلد</label>
                        <select class="chosen" data-placeholder="البـــلد" style="display: none;">
                            <option value="United States">الجزائر</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4 m-b-25 pull-right">
                    <div class="fg-line">
                        <label>الولايــــة</label>
                        <select class="chosen" data-placeholder="الولايــة">
                            <option value="United States">الجزائر العاصمة</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4 m-b-25 pull-right">
                    <label>البلدية</label>

                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="بلدية الميلاد ">
                    </div>

                </div>


            </div>

        </div>


    </div>

    <div class="card">
        <div class="card-header">
            <h2>
                معلومات شخصية
                <small>تفاصيل عن الطالب</small>
            </h2>
        </div>

        <div class="card-body">
            <br>
            <br>

            <p class="f-500 c-black m-b-20" style="direction: rtl">صـــورة شخصيـــة</p>

            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="line-height: 150px;"></div>
                <div>
                                    <span class="btn btn-info btn-file waves-effect">
                                        <span class="fileinput-new">إختـــر صـــورة</span>
                                        <input type="hidden"><input type="file" name="...">
                                    </span>
                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Remove</a>
                </div>
            </div>


            <div class="input-group m-b-20">

                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                <div class="fg-line" style="direction:RTL;">
                    <input type="email" class="form-control" placeholder="الإيـــمــايل">
                </div>


            </div>


            <div class="input-group m-b-20">

                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                <div class="fg-line" style="direction:RTL;">
                    <input type="tel" class="form-control" placeholder="رقـــم الهـــاتف">
                </div>


            </div>


            <div class="input-group m-b-20">

                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                <div class="fg-line" style="direction:RTL;">
                    <input type="url" class="form-control" placeholder="الفـــايسبوك">
                </div>

            </div>


            <div class="input-group m-b-20">

                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                <div class="fg-line" style="direction:RTL;">
                    <input type="text" class="form-control" placeholder="السكايـــب">
                </div>


            </div>


        </div>
    </div>


    <div class="clearfix"></div>

    <!--
    <div class="checkbox">
        <label>
            <input type="checkbox" value="">
            <i class="input-helper"></i>
            Keep me signed in
        </label>
    </div>
-->

    <!-- Register -->
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

        <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

        <ul class="login-navigation">
            <li data-block="#l-login" class="bgm-green">Login</li>
            <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
        </ul>
    </div>

    <!-- Forgot Password -->
    <div class="lc-block" id="l-forget-password">
        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo
            lorem fringilla enim feugiat commodo sed ac lacus.</p>

        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>

            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Email Address">
            </div>
        </div>

        <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>


        <ul class="login-navigation">
            <li data-block="#l-login" class="bgm-green">Login</li>
            <li data-block="#l-register" class="bgm-red">Register</li>
        </ul>


    </div>

</div>


<!-- page 2 additionnal information  -->

<div class="lc-block toggled" id="f-add-infos">

    <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-back"></i></a>


    <!--Quantite de Hifd -->

    <div class="card">

        <div class="card-header">
            <h2>
                معـــلومات إضافيــة
                <small>معلـــومات حول الحفظ والمراجعة</small>
            </h2>

        </div>

        <div class="card-body">
            <div class="input-group m-b-20">

                 <h4>
                 مقــدار الحفـظ
                </h4>

                <div class="row"></div>
                <p class="f-500 c-black m-b-20 pull-right" style="direction: rtl">الأحـــزاب</p>
                <div class="row"></div>

                <div class="row">
                    <div class="col-sm-4 m-b-25 pull-right">
                        <label>من فــوق</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="مــن">
                        </div>
                        
                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="إلى">
                        </div>
                        

                    </div>

                    <div class="col-sm-4 m-b-25 pull-right">
                        <label>من تــحت</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="مــن ">
                        </div>
                        
                        
                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="إلى">
                        </div>
                        

                    </div>


                    <div class="col-sm-4 m-b-25 ">
                        <label>إجمـــالي الحفــظ</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأحزاب">
                        </div>
                        
                       

                    </div>

                </div>

                <p class="f-500 c-black m-b-20 pull-right" style="direction: rtl">الأثــمان</p>
                <div class="row"></div>

                <div class="row">
                    <div class="col-sm-4 m-b-25 pull-right" style="background-color: #005580">
                        <label>من فــوق</label>
                      <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="مــن ">
                        </div>
                        
                        
                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="إلى">
                        </div>

                    </div>

                    <div class="col-sm-4 m-b-25 pull-right">
                        <label>من تــحت</label>
                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="مــن ">
                        </div>
                        
                        
                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="إلى">
                        </div>

                    </div>

    
                    <div class="col-sm-4 m-b-25 ">
                        <label>إجمـــالي الحفــظ</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأثــمان">
                        </div>

                    </div>

                </div>



            </div>




            <!-- Quantité de Revision -->
            <div class="input-group m-b-20">

                <h4>
                    مقــدار المراجعة 
                </h4>

                <div class="row"></div>
                <p class="f-500 c-black m-b-20 pull-right" style="direction: rtl">الأحـــزاب</p>
                <div class="row"></div>

                <div class="row">
                    <div class="col-sm-4 m-b-25 pull-right">
                        <label>من فــوق</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأحـزاب">
                        </div>

                    </div>

                    <div class="col-sm-4 m-b-25 pull-right">
                        <label>من تــحت</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأحـزاب">
                        </div>

                    </div>


                    <div class="col-sm-4 m-b-25 ">
                        <label>إجمـــالي الحفــظ</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأحـزاب">
                        </div>

                    </div>

                </div>

                <p class="f-500 c-black m-b-20 pull-right" style="direction: rtl">الأثــمان</p>
                <div class="row"></div>

                <div class="row">
                    <div class="col-sm-4 m-b-25 pull-right">
                        <label>من فــوق</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأثــمان">
                        </div>

                    </div>

                    <div class="col-sm-4 m-b-25 pull-right">
                        <label>من تــحت</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأثــمان">
                        </div>

                    </div>


                    <div class="col-sm-4 m-b-25 ">
                        <label>إجمـــالي الحفــظ</label>

                        <div class="fg-line">
                            <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأثــمان">
                        </div>

                    </div>

                </div>



            </div>



        </div>
    </div>







<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/waves.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/datetimepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<!--<script type="text/javascript" src="{{ URL::asset('js/bootstrap-select/bootstrap-select.js') }}"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/chosen/chosen.jquery.min.js') }}"></script>
<!--<script type="text/javascript" src="{{ URL::asset('js/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>-->
<!--<script type="text/javascript" src="{{ URL::asset('js/typeahead/typeahead.bundle.min.js') }}"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/functions2.js') }}"></script>

</body>

</html>





