@extends('app');

@section('content') 
    <h1>Write a new Article</h1>
        
    {!! Form::open(['url'=>'articles'])  !!}
    <div class="form-group">
        {!! Form::label('title','Title')  !!}
        {!! Form::text('title',null,['class' => 'form-control'])  !!}
        
    </div>



    <div class="form-group">
        {!! Form::label('title','Article Body')  !!}  
        {!! Form::textarea('body',null,['class' => 'form-control']) !!}
    </div>

    

    <div class="form-group">
        {!! Form::label('published_at','Published At')  !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control'])  !!}
        
    </div>
    


    <div class="form-group">
        {!! Form::submit('Add Article',['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!!  Form::close() !!}
 

@stop