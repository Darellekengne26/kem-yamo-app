@extends('base.base', ['title' => 'Kem Yamo Restaurant |'] )

@section('content')
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Inscription</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        
        <!-- Connexion -->
        <div class="corps">
            <div class="connexion">
                <input type="checkbox" id="check">
                <div class="registration form">
                  <header>Inscription</header>
                  @if (session()->has('success')) 
                     <div class="alert alert-success"> {{ session()->get('success') }} </div>
                  @endif 
                  <form action="/inscription" method="POST">
                    @method('post')
                    @csrf
                    <input type="email" name="email" placeholder="Entrer votre email" value={{ old('email')}}>
                    @error('email')
                       <div class="text text-danger"> {{ $message }} </div>
                    @enderror
                    <input type="text" name="telephone" placeholder="Entrer votre numero de telephone" value={{ old('telephone')}}>
                    @error('telephone')
                       <div class="text text-danger"> {{ $message }} </div>
                    @enderror
                    <input type="password" name="password" placeholder="Creer un mot de passe">
                    @error('password')
                       <div class="text text-danger"> {{ $message }} </div>
                    @enderror
                    <input type="password" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                    <button type="submit" class="btn btn-primary w-100 py-3">S'incrire</button>
                  </form>
                  <div class="signup">
                    <span class="signup">Vous avez deja un compte?
                     <label for="check" ><a href="/connexion">Se Connecter</label>
                    </span>
                  </div>
                </div>
              </div>
        </div>
        <!-- End Connexion -->


@endsection