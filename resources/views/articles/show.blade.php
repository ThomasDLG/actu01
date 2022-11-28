@extends('layouts.app')
@section('title')
    Actu01 - Article
@endsection

@section('content')
<article>
    <div class="container">
        <div class="article">
            <img src="{{$article->image}}" alt="">
            <h4>{{$article->title}}</h4>
            <p>{{$article->content}}</p>
            <span>Par : <a href="">{{$article->user->name}}</a></span>
            <br>
            <h6>Publié le {{$article->created_at}} à , mise à jour à {{$article->updated_at}}</h6>
            <span><i class="fa-solid fa-stopwatch"></i> Lecture </span>
        </div>
        <div class="share">
            <a href=""><i class="fa-brands fa-twitter"></i>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-solid fa-envelope"></i></a></a>
            <a href=""><i class="fa-solid fa-heart"></i></a>
        </div>
        <hr>
        <div class="articles">
            @foreach ($articles as $article)
                <div class="articles-content">
                    <div class="articles-content-image">
                        <a href="{{ route('articles.show', [$categorie->slug, $article->id])}}">
                            <img src="{{$article->image}}" alt="">
                        </a>
                    </div>
                    <div class="articles-content-infos">
                        <h4>{{$article->title}}</h4>
                        <div class="articles-content-infos-more">
                            <span>Par : <a href="">{{$article->user->name}}</a></span>
                            <span>{{ \Carbon\Carbon::parse($article->when)->toFormattedDateString() }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</article>
@endsection