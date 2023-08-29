@extends('base.base', ['title' => 'Kem Yamo Restaurant |'] )

@section('content')
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Utilisateur</h1>
                </div>
            </div>
            <h1> {{ $user -> id }} </h1>
            <h4>{{ $user -> email }} </h4>
            <h4>{{ $user -> telephone }} </h4>
            <h4>{{ $user -> type_user }} </h4>

        </div>


@endsection