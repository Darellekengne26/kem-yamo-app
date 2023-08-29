
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="/assets/image/logo1.png" alt="Logo"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link">Acceuil</a>
                <a href="/a propos" class="nav-item nav-link">A Propos</a>
                <a href="/menu" class="nav-item nav-link">Menu</a>
                <a href="/reservation" class="nav-item nav-link">Reservation</a>
                <a href="/conseil" class="nav-item nav-link">Conseil</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
                <a href="/dashboard" class="nav-item nav-link">Mon Compte{{-- {{ Auth::User()->id}} --}} </a>
            </div>
            @if(Auth::check())
                <a href="/deconnexion" class="btn btn-primary py-2 px-4">SE DECONNECTER</a>
            @else
                <a href="/connexion" class="btn btn-primary py-2 px-4">SE CONNECTER</a>
            @endif
        </div>
    </nav>

