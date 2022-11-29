@extends('layouts.app')
@section('title')
    Actu01 - Article
@endsection

@section('content')
<article>
    <div class="container">
        <x-articles :$article/>
        <div class="share">
            <a href=""><i class="fa-brands fa-twitter"></i>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-solid fa-envelope"></i></a></a>
            <a href=""><i class="fa-solid fa-heart"></i></a>
        </div>
        <hr>
        <div class="articles">
            @foreach ($articles as $article)
                <x-categorie :$categorie :$article/>
            @endforeach
        </div>
    </div>
</article>
@endsection