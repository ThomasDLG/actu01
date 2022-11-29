@extends('layouts.app')
@section('title')
    Actu01 - Rubriques
@endsection

@section('content')
<article>
    <div class="container">
        <h2 class="tags">Le Live</h2>
        <div class="articles">
            {{-- {{dd($categorie)}} --}}
            @foreach ($articles as $article)
                <x-live-articles :$article :$categorie/>
            @endforeach
        </div>
    </div>
</article>
@endsection