@extends('layouts.app')
@section('title')
    Actu01 - Rubriques
@endsection

@section('content')
<article>
    <div class="container">
        <h2 class="tags">{{$categorie->name}}</h2>
        <div class="articles">
            @foreach ($articles as $article)
            <div class="articles-content">
                <div class="articles-content-image">
                    <img src="{{$article->image}}" alt="">
                </div>
                <div class="articles-content-infos">
                    <h4>{{$article->title}}</h4>
                    <div class="articles-content-infos-more">
                        <span>Par : <a href="">{{$article->user->name}}</a></span>
                        <span>{{$article->created_at}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</article>
@endsection