@extends('app')
@section('content')
<h3>A list content :</h3>
@if(count($peoples))
<ul>
    @foreach($peoples as $person)
    <li>{{$person}}</li>
    @endforeach
</ul>
@endif



<h1> Hello Nice to meet you </h1>
    <pre>
        I am :......
    </pre>

@stop

@section('footer')
    <pre>
        It's a footer of the page Contact
        Please contact me 
        AU revoir :<  :)   :(
        
        
        
    </pre>
@stop
