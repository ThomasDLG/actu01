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
                <x-categorie :$categorie :$article/>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
</article>
@endsection