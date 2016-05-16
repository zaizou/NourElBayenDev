@extends('app_arabic2')
@section('includes')
    <link href="{{ URL::asset('css/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@stop
@section('page_title')
@stop
@section('header')
    @include('profile.toolbar');
@stop
@section('section')
    @include('profile.main');
@stop
@section('footer')
    @include('profile.footer');
@stop

@section('js_includes')
    <script type="text/javascript" src="{{ URL::asset('js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
@stop


