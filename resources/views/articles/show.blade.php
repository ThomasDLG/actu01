@extends('layouts.app')
@section('title')
    Actu01 - Article
@endsection

@section('content')
<article>
    <div class="container">
        <h2 class="tags"></h2>
        <div class="article">
            <img src="{{$article->image}}" alt="">
            <h4>{{$article->title}}</h4>
            <p>{{$article->content}}</p>
            <span>Par : <a href="">{{$article->user->name}}</a></span>
            <br>
            <h6>Publié le {{$article->created_at}} à , mise à jour à {{$article->updated_at}}</h6>
            <span><i class="fa-solid fa-stopwatch"></i> Lecture </span>
        </div>
    </div>
</article>
@endsection