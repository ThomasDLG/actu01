@extends('layouts.app')
@section('title')
    Actu01 - Recherche
@endsection

@section('content')
<article>
    <div class="container">
        <h2 class="tags">Recherche</h2>
        <div class="articles">
            {{-- {{dd($categorie)}} --}}
            @foreach ($articles as $article)
                <x-live-articles :$article :$categorie/>
            @endforeach
        </div>
    </div>
</article>
@endsection