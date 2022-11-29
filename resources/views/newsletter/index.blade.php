@extends('layouts.app')
@section('title')
    Actu01 - Newsletter
@endsection

@section('content')
<article>
    <div class="container">
        <h2 class="tags">Newsletter</h2>
        <div class="contact">
            <form action="{{route('newsletter.store')}}" method="post">
                @csrf
                <div class="input-form">
                    <input type="text" name="name" id="name" placeholder="Prénom" value="{{ old('name') }}">
                    @error('name')
                    <div class="error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="input-form">
                    <input type="text" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-form-button">
                    <button class="btn btn-primary uppercase" type="submit">S'abonner</button>
                </div>
            </form>
        </div>
    </div>
</article>
@endsection