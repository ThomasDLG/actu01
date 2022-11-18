@extends('layouts.app')
@section('title')
    Actu01 - Contact
@endsection

@section('content')
<article>
    <div class="container">
        <h2 class="tags">Contact</h2>
        <div class="contact">
            <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="input-form">
                    <input type="text" name="surname" id="surname" placeholder="Nom - Prénom" value="{{ old('surname') }}">
                    @error('surname')
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
                <div class="input-form">
                    <select name="service" id="service">
                        <option value="">-- Services --</option>
                        <option value="1"{{ old('service') == 1 ? 'selected' : '' }}>Service 1</option>
                        <option value="2"{{ old('service') == 2 ? 'selected' : '' }}>Service 2</option>
                        <option value="3"{{ old('service') == 3 ? 'selected' : '' }}>Service 3</option>
                        <option value="4"{{ old('service') == 4 ? 'selected' : '' }}>Service 4</option>
                    </select>
                    @error('service')
                        <div class="error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-form">
                    <textarea name="message" id="message" placeholder="Message">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit">S'abonner</button>
            </form>
        </div>
    </div>
</article>
@endsection