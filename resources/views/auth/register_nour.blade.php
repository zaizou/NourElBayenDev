<!DOCTYPE html>
<html class="login-content" dir="RTL">

<head>
    <title>تـــسجيل</title>
    <!--<meta name="csrf_token" content="{ csrf_token() }" />-->
    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/material-design-iconic-font/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-select/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/chosen/chosen.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/malihu-scrollbar/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.min.2.css') }}" rel="stylesheet">

</head>

<body class="login-content">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- page 1 personel informations  -->
    
        <div class="lc-block toggled" id="f-genaral-infos">

            <a href="#" class="btn btn-login btn-danger btn-float" type="<submit></submit>"><i class="zmdi zmdi-arrow-back"></i></a>


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


                        <div class="fg-line">
                            <input type="name" name="issm" class="form-control" placeholder="الإســــم">
                        </div>
                        
                         <div class="fg-line">
                            <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                        </div>


                    </div>

                    <div class="input-group m-b-20">

                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>

                        <div class=" fg-line">
                            <input  name="laquab" class="form-control" placeholder="اللقــب">
                        </div>

                    </div>

                    <p class="f-500 c-black m-b-20" style="direction: rtl">العنـــوان</p>

                    <div class="row" id="living_address">
                        <div class="col-sm-4 pull-right">
                            <div class="">
                                <label>البلد</label>
                                <select name="living_country" class="chosen" data-placeholder="البـــلد" style="display: none;">
                                    <option value="Algeria">الجزائر</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 m-b-25 pull-right">
                            <div class="fg-line">
                                <label>الولايــــة</label>
                                <select name="living_city" class="chosen" data-placeholder="الولايــة">
                                    <option value="United States">الجزائر العاصمة</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 m-b-25 pull-right">
                            <label>البلدية</label>

                            <div class="fg-line">
                                <input type="text" name="living_town" class="form-control" placeholder="بلدية الميلاد ">
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
                            <input type="text" name="birthdate" class="form-control date-picker" placeholder="تاريخ الميلاد">
                        </div>

                    </div>

                    <div class="row" id="birth_address">


                        <div class="col-sm-4 pull-right">
                            <div class="">
                                <label>البلد</label>
                                <select name="birth_country" class="chosen" data-placeholder="البـــلد" style="display: none;">
                                    <option value="United States">الجزائر</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 m-b-25 pull-right">
                            <div class="fg-line">
                                <label>الولايــــة</label>
                                <select name="birth_city" class="chosen" data-placeholder="الولايــة">
                                    <option value="United States">الجزائر العاصمة</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 m-b-25 pull-right">
                            <label>البلدية</label>

                            <div class="fg-line">
                                <input type="text" name="birth_town" class="form-control" placeholder="بلدية الميلاد ">
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

                    <p class="f-500 c-black m-b-20"  style="direction: rtl">صـــورة شخصيـــة</p>

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="line-height: 150px;"></div>
                        <div>
                            <span class="btn btn-info btn-file waves-effect">
                                        <span class="fileinput-new">إختـــر صـــورة</span>
                            <input type="hidden">
                            <input name="personal_photo" type="file" name="...">
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>


                    <div class="input-group m-b-20">

                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                        <div class="fg-line" style="direction:RTL;">
                            <input name="email" type="email" class="form-control" placeholder="الإيـــمــايل">
                        </div>


                    </div>


                    <div class="input-group m-b-20">

                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                        <div class="fg-line">
                            <input type="tel" name="phone_number" class="form-control" placeholder="رقـــم الهـــاتف">
                        </div>


                    </div>


                    <div class="input-group m-b-20">

                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                        <div class="fg-line" >
                            <input type="url" name="facebook_profile" class="form-control" placeholder="الفـــايسبوك">
                        </div>

                    </div>


                    <div class="input-group m-b-20">

                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>


                        <div class="fg-line" style="direction:RTL;">
                            <input type="text"  name="skype" class="form-control" placeholder="السكايـــب">
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
                        <i class="input-helper"></i> Accept the license agreement
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
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

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
        <div class="lc-block " id="f-add-infos">

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

                    <h4>
                مقــدار الحفـظ
            </h4>

                    <div class="row"></div>
                    <p class="f-500 c-black m-b-20 pull-right" style="direction: rtl">من فــوق</p>

                    <div class="row"></div>

                    <div class="row">
                        <div class="col-sm-4 m-b-25 pull-right">
                            <label>مـن الحزب</label>

                            <div class="fg-line">
                                <input name="from_hizb" type="number" max="60" min="1" class="form-control" placeholder="مــن">
                            </div>

                        </div>

                        <div class="col-sm-4 m-b-25 pull-right">
                            <label> الثـمن</label>

                            <div class="fg-line">
                                <input name="from_thoumoun" type="number" max="60" min="1" class="form-control" placeholder="مــن">
                            </div>

                        </div>
                        <div class="span4"></div>
                    </div>

                    <div class="row"></div>

                    <div class="row">
                        <div class="col-sm-4 m-b-25 pull-right">
                            <label>إلى الحزب</label>

                            <div class="fg-line">
                                <input name="to_hizb" type="number" max="60" min="1" class="form-control" placeholder="مــن">
                            </div>

                        </div>

                        <div class="col-sm-4 m-b-25 pull-right">
                            <label> الثـمن</label>

                            <div class="fg-line">
                                <input name="to_thoumoun" type="number" max="60" min="1" class="form-control" placeholder="مــن">
                            </div>

                        </div>
                        <div class="span4"></div>
                    </div>


                    <div class="row"></div>
                    <div class="row">
                        <div class="col-sm-4 pull-right">
                            <label>إجــمالي الحفظ</label>

                            <div class="fg-line">
                                <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأثــمان">
                            </div>
                        </div>

                        <div class="col-sm-4 pull-right">
                            <label>النســبة المئوية</label>

                            <div class="fg-line">
                                <input type="" class="form-control" placeholder="عدد الأثــمان">
                            </div>
                        </div>

                    </div>


                    <div class="row"></div>
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 pull-right">

                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>


            <!-- Quantité de Revision -->
            <div class="card">
                <div class="card-header">
                    <h4>مقــدار المــراجعة</h4>
                </div>
                <div class="card-body">
                    <div class="input-group m-b-20">


                        <div class="row"></div>
                        <p class="f-500 c-black m-b-20 pull-right" style="direction: rtl">مــن فوق</p>

                        <div class="row"></div>
                        <div class="row">
                            <div class="col-sm-3 m-b-25 pull-right">
                                <label>من </label>

                                <div class="fg-line">
                                    <input name="mouradjaa_from_hizb" type="number" max="60" min="1" class="form-control" placeholder="مــن">
                                </div>

                            </div>

                            <div class="col-sm-4 m-b-25 pull-right">
                                <label>إلــى </label>

                                <div class="fg-line">
                                    <input name="mouradjaa_to_hizb" type="number" max="60" min="1" class="form-control" placeholder="إلى ">
                                </div>

                            </div>


                            <div class="col-sm-5 m-b-25 ">
                                <label> الثـمن</label>

                                <div class="fg-line">
                                    <input name="mouradjaa_from_thoumoun" type="number" max="8" min="1" class="form-control" placeholder="عدد الأثــمان">
                                </div>
                            </div>

                        </div>


                        <p class="f-500 c-black m-b-20 pull-right" style="direction: rtl">من تـحت</p>

                        <div class="row"></div>

                        <div class="row">
                            <div class="col-sm-3 m-b-25 pull-right">
                                <label>من </label>

                                <div class="fg-line">
                                    <input type="number" max="60" min="1" class="form-control" placeholder="مــن">
                                </div>

                            </div>

                            <div class="col-sm-4 m-b-25 pull-right">
                                <label>إلــى </label>

                                <div class="fg-line">
                                    <input type="number" max="60" min="1" class="form-control" placeholder="إلى ">
                                </div>

                            </div>


                            <div class="col-sm-5 m-b-25 ">
                                <label> الثـمن</label>

                                <div class="fg-line">
                                    <input type="number" max="8" min="1" class="form-control" placeholder="عدد الأثــمان">
                                </div>


                            </div>


                        </div>

                        <div class="row">
                            <div class="col-sm-4 pull-right">
                                <label>إجــمالي المراجعة</label>

                                <div class="fg-line">
                                    <input type="number" max="60" min="1" class="form-control" placeholder="عدد الأثــمان">
                                </div>
                            </div>

                            <div class="col-sm-4 pull-right">
                                <label>النســبة المئوية</label>

                                <div class="fg-line">
                                    <input type="" class="form-control" placeholder="عدد الأثــمان">
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>

        </div>
        

    </form>




    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <!--<script type="text/javascript" src="{{ URL::asset('js/bootstrap-select/bootstrap-select.js') }}"></script>-->
    <script type="text/javascript" src="{{ URL::asset('js/chosen/chosen.jquery.min.js') }}"></script>
    <!--<script type="text/javascript" src="{{ URL::asset('js/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>-->
    <!--<script type="text/javascript" src="{{ URL::asset('js/typeahead/typeahead.bundle.min.js') }}"></script>-->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/additional-methods.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>

</body>

</html>