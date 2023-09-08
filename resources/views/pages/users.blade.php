@extends('base.base', ['title' => 'Kem Yamo Restaurant |'] )

@section('content')
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Utilisateurs</h1>
                </div>
            </div>
            <h1>Les Utilisateurs sont : </h1>

            <ul>
                @foreach ($users as $user)
                    <li> {{ $user -> email }}</li>
                @endforeach
            </ul>

        </div>


@endsection