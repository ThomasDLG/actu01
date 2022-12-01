<x-app-layout>
@section('content')
    <div class="container">
        <div class="auth-dashboard">
            <nav>
                <ul>
                    <li><a href="{{ route('profile.edit')}}">Éditer le profil</a></li>
                    <li>
                        <form action="{{ route('logout')}}" method="post">
                            @csrf
                            <button class="" type="submit">Se déconnecter</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
</x-app-layout>
