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
    </div>
</article>

{{-- MOST READS --}}

{{-- LIVE --}}

<article>
    <div class="container">
        <div class="home-articles-carousel">
            @foreach ($liveArticles as $article)
                <x-home-categorie-carousel :$categorie :$article />
            @endforeach
        </div>
    </div>
</article>

@endsection