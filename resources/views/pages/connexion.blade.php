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
                  <form action="#">
                    <input type="text" placeholder="Entrer votre email">
                    <input type="password" placeholder="Entrer votre mot de passe">
                    <a href="#">Mot de passe oublie?</a>
                    <input type="button" class="btn btn-primary w-100 py-3" value="Se Connecter">
                  </form>
                  <div class="signup">
                    <span class="signup">Vous n'avez pas de compte?
                     <label for="check">S'inscrire</label>
                    </span>
                  </div>
                </div>
                <div class="registration form">
                  <header>Inscription</header>
                  <form action="#">
                    <input type="text" placeholder="Entrer votre email">
                    <input type="password" placeholder="Creer un mot de passe">
                    <input type="password" placeholder="Confirmer votre mot de passe">
                    <input type="button" class="btn btn-primary w-100 py-3" value="S'inscrire">
                  </form>
                  <div class="signup">
                    <span class="signup">Vous avez deja un compte?
                     <label for="check">Se Connecter</label>
                    </span>
                  </div>
                </div>
              </div>
        </div>
        <!-- End Connexion -->


@endsection