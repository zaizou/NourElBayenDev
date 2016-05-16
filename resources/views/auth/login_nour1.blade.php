<!DOCTYPE html>
<html>
<head>
    <title>Basic Example dahs</title>
    <!-- Bootstrap -->


    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/form-wizard/materialadmin.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/form-wizard/wizard.css') }}" rel="stylesheet">


</head>
<body>
<div class="col-md-offset-3 col-md-6" style="margin-top: 10%">
<div class="card">
    <div class="card-body ">
        <div id="rootwizard" class="form-wizard form-wizard-horizontal">
            <form class="form floating-label">
                <div class="form-wizard-nav">
                    <div class="progress" style="width: 75%;">
                        <div class="progress-bar progress-bar-primary" style="width: 0%;"></div>
                    </div>
                    <ul class="nav nav-justified nav-pills">
                        <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true"><span
                                        class="step">1</span> <span class="title">LOCATION</span></a></li>
                        <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false"><span class="step">2</span>
                                <span class="title">ADDRESS</span></a></li>
                        <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false"><span class="step">3</span>
                                <span class="title">SETTINGS</span></a></li>
                        <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false"><span class="step">4</span>
                                <span class="title">CONFIRM</span></a></li>
                    </ul>
                </div>
                <!--end .form-wizard-nav -->
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="tab1">
                        <br><br>

                        <div class="form-group">
                            <input type="text" name="Address" id="Address" class="form-control">
                            <label for="Address" class="control-label">Address</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="text" name="City" id="City" class="form-control">
                                    <label for="City" class="control-label">City</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="State" id="State" class="form-control">
                                    <label for="State" class="control-label">State</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end #tab1 -->
                    <div class="tab-pane" id="tab2">
                        <br><br>

                        <div class="form-group">
                            <input type="text" name="Country" id="Country" class="form-control">
                            <label for="Country" class="control-label">Country</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="Zipcode" id="Zipcode" class="form-control">
                            <label for="Zipcode" class="control-label">Zipcode</label>
                        </div>
                    </div>
                    <!--end #tab2 -->
                    <div class="tab-pane" id="tab3">
                        <br><br>

                        <div class="form-group">
                            <input type="text" name="URL" id="URL" class="form-control">
                            <label for="URL" class="control-label">URL</label>

                            <p class="help-block">Starts with http://</p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="rangelength" id="rangelength" class="form-control">
                            <label for="rangelength" class="control-label">Range restriction</label>

                            <p class="help-block">Between 5 and 10</p>
                        </div>
                    </div>
                    <!--end #tab3 -->
                    <div class="tab-pane" id="tab4">
                        <br><br>

                        <div class="form-group">
                            <select id="Age1" name="Age" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                            </select>
                            <label for="Age1">Age</label>

                            <p class="help-block">This is supporting text for this field.</p>
                        </div>
                    </div>
                    <!--end #tab4 -->
                </div>
                <!--end .tab-content -->
                <ul class="pager wizard">
                    <li class="previous first disabled"><a class="btn-raised" href="javascript:void(0);">First</a></li>
                    <li class="previous disabled"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
                    <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a></li>
                    <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
                </ul>
            </form>
        </div>
        <!--end #rootwizard -->
    </div>
    <!--end .card-body -->
</div>
</div>
<!--
<script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>
-->
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.bootstrap.wizard.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/form-wizard/DemoFormWizard.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/form-wizard/Demo.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/form-wizard/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/form-wizard/jquery.autosize.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/form-wizard/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/form-wizard/spin.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/form-wizard/63d0445130d69b2868a8d28c93309746.js') }}"></script>


<script>
    $(document).ready(function () {
        $('#rootwizard').bootstrapWizard();
    });
</script>
</body>
</html>


