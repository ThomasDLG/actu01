@extends('layouts.app')
@section('title')
    Actu01 - Home
@endsection

@section('content')

{{-- MOST RECENT NEWS --}}

<article>
    <div class="container">
        <div class="home-articles-carousel">
            @foreach ($dontMissArticles as $article)
                <x-home-categorie-carousel :$categorie :$article />
            @endforeach
        </div>
    </div>
</article>

{{-- FAITS DIVERS --}}

<article>
    <div class="container">
        <h2 class="tags">FAITS DIVERS</h2>
        <div class="home-articles">
            @foreach ($miscArticles as $article)
                <x-home-categorie :$categorie :$article />
            @endforeach
        </div>
        <a class="btn btn-primary" href="{{ route('categories.show', 'faits-divers')}}">Voir tous</a>
    </div>
</article>

{{-- SPORTS --}}

<article>
    <div class="container">
        <h2 class="tags">SPORTS</h2>
        <div class="home-articles">
            @foreach ($sportsArticles as $article)
                <x-home-categorie :$categorie :$article />
            @endforeach
        </div>
        <a class="btn btn-primary" href="{{ route('categories.show', 'sports')}}">Voir tous</a>
    </div>
</article>

{{-- CULTURE --}}

<article>
    <div class="container">
        <h2 class="tags">CULTURE</h2>
        <div class="home-articles">
            @foreach ($cultureArticles as $article)
                <x-home-categorie :$categorie :$article />
            @endforeach
        </div>
        <a class="btn btn-primary" href="{{ route('categories.show', 'culture')}}">Voir tous</a>
    </div>
</article>

{{-- MOST READS --}}

{{-- LIVE --}}

<article>
    <div class="container">
        <h2 class="tags">LE LIVE</h2>
        <div class="home-articles-carousel">
            @foreach ($liveArticles as $article)
                <x-home-categorie-carousel :$categorie :$article />
            @endforeach
        </div>
    </div>
</article>

@endsection