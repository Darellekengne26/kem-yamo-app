@extends('base.base', ['title' => 'Kem Yamo Restaurant |'] )

@section('content')
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Connexion</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        
        <!-- Connexion -->
        <div class="corps">
            <div class="connexion">
                <input type="checkbox" id="check">
                <div class="login form">
                  <header>Connexion</header>
                  @if (session()->has('error')) 
                     <div class="alert alert-danger"> {{ session()->get('error') }} </div>
                  @endif
                  <form action="/connexion" method="POST">
                    @method('post')
                    @csrf
                    <input type="email" name="email" placeholder="Entrer votre email" value={{ old('email')}}>
                    @error('email')
                       <div class="text text-danger"> {{ $message }} </div>
                    @enderror
                    <input type="password" name="password" placeholder="Creer un mot de passe">
                    @error('password')
                       <div class="text text-danger"> {{ $message }} </div>
                    @enderror
                    <a href="#">Mot de passe oublie?</a>
                    <button type="submit" class="btn btn-primary w-100 py-3"> Se Connecter</button>
                  </form>
                  <div class="signup">
                    <span class="signup">Vous n'avez pas de compte?
                     <label for="check"><a href="/inscription">S'inscrire</a></label>
                    </span>
                  </div>
                </div>
            </div>
        </div>
        <!-- End Connexion -->

@endsection