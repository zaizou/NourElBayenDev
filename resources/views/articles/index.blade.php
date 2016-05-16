@extends('app');

@section('main')
    <h1>Articles</h1>
    
    @foreach($articles as $article)
    
        <article>
            <h2>
            
                <a href="{{action('ArticlesController@show',[$article->id])}}">{{$article->title}}</a>
            
            </h2>
            <div class="body">{{$article->body}}</div>
        </article>

    @endforeach
                
    
@stop


@section('footer-cont')
    <h1><a href="articles/create">Add Another Article</a>    </h1>
    


@stop