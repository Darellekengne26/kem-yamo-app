@extends('base.base', ['title' => 'Kem Yamo Restaurant |'] )

@section('content')
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"> Menu</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal"> Menu</h5>
                    <h1 class="mb-5">Nos Delicieux Plats</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <!-- <i class="fa fa-coffee fa-2x text-primary"></i> -->
                                <div class="ps-3">
                                    <!-- <small class="text-body">Popular</small> -->
                                    <h6 class="mt-n1 mb-0">Restaurant</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <!-- <i class="fa fa-hamburger fa-2x text-primary"></i> -->
                                <div class="ps-3">
                                    <!-- <small class="text-body">Special</small> -->
                                    <h6 class="mt-n1 mb-0">Pizzeria</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                                <div class="ps-3">
                                    <!-- <small class="text-body">Lovely</small> -->
                                    <h6 class="mt-n1 mb-0">Grillade</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                                <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                                <div class="ps-3">
                                    <!-- <small class="text-body">Lovely</small> -->
                                    <h6 class="mt-n1 mb-0">Glacier</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
                                <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                                <div class="ps-3">
                                    <!-- <small class="text-body">Lovely</small> -->
                                    <h6 class="mt-n1 mb-0">Boisson</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-6">
                                <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                                <div class="ps-3">
                                    <!-- <small class="text-body">Lovely</small> -->
                                    <h6 class="mt-n1 mb-0">Cave</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poisson1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Poisson + Complement</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1500/2000/2500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div><div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/okok1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">O'okock sucre/sale</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1000/1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poisson1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Maquereau-Carpe-Bar-Sol</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1500/2000/2500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/water-fufu1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Eru + Water Fufu</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1000/1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poisson1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Poisson a la poele</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/ndole1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Ndole + Viandes</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1000/1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poulet1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">1/4 Poulet + Complement</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">2000             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/atieke1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Atieke + Viandes</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1000/1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poulet1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Poulet + Complement</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/spaghetti1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Spaghetti + Viandes/Poulet/Frites</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1000/1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poulet_pane1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Poulets panes + Complement</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">2000             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/riz1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Riz Poulet/Senegalais</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">1500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/pizza-viande.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Pizza a la Viande de Boeuf</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">3500/5000/7000             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/pizza-poulet.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Pizza au Poulet</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">4500/6000/7500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/pizza-jambon.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Pizza au Jambon</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">4500/6000/7500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/brochette.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Brochettes + Pommes/Plantains/Miondo</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">3500/5000/7000             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poisson1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Poissons Braises + Pommes/Plantains/Miondo </span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">4500/6000/7500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/poulet1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Poulets Braises + Pommes/Plantains/Miondo</span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">4500/6000/7500             FCFA</span></h5>
                                            <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/glace-simple.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-light">Glace</span>
                                                    <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">500/1000/1500/2000             FCFA</span></h5>
                                                <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/glace1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Chocolat </span>
                                                    <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">500/1000/1500/2000             FCFA</span></h5>
                                                <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/glace-menthe.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Menthe</span>
                                                    <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">500/1000/1500/2000            FCFA</span></h5>
                                                <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/glace-vanille.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-light">Vanille</span>
                                                    <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <h5><span class="text-primary">500/1000/1500/2000             FCFA</span></h5>
                                                <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/lait-caille.jpg" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-light">1/4 L Lait Caille</span>
                                                        <!-- <span class="text-primary">$115</span> -->
                                                </h5>
                                                <h5><span class="text-primary">500             FCFA</span></h5>
                                                    <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/lait-caille.jpg" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-light">1/2 L Lait Caille </span>
                                                        <!-- <span class="text-primary">$115</span> -->
                                                </h5>
                                                <h5><span class="text-primary">1000             FCFA</span></h5>
                                                    <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/jus-naturel.jpg" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-light">Jus Naturels</span>
                                                        <!-- <span class="text-primary">$115</span> -->
                                                </h5>
                                                <h5><span class="text-primary">600             FCFA</span></h5>
                                                    <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/jus-cassable.jpg" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-light">Jus Cassables</span>
                                                        <!-- <span class="text-primary">$115</span> -->
                                                </h5>
                                                <h5><span class="text-primary">800             FCFA</span></h5>
                                                    <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="/assets/image/biere.jpg" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-light">Bierres</span>
                                                        <!-- <span class="text-primary">$115</span> -->
                                                </h5>
                                                <h5><span class="text-primary">800             FCFA</span></h5>
                                                    <!-- <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small> -->
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="container">
                                <div class="tab-class" data-wow-delay="0.1s">
                                    <div class="cave_content">
                                        <h5><p><a href="#cave-1"> Vins Rouges</a></p></h5>
                                        <div id="cave-1" class="tab-pane fade show p-0 active">
                                            <div class="row g-4">
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bastide_dauzac.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bastide Dauzac</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bernard_chateau_jamais_renoncer.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bernard Chateau Jamais Renoncer </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bernard_la_memoire_de_la_tour_carnet.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bernard La Mermoire de la Tour Carnet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bordeau_h.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bordeaux H </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bordeaux_chateau_les_maurins.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bordeaux Chateau les Marins</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bordeaux_raymond_hulet1.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bordeaux Raymond Hulet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bordeaux_raymond_hulet2.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bordeaux Raymond Hulet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_bordeaux_robert_charton.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bordeaux Robert Charton</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_brut_cuvee.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Brut cuvee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_chateau_les_religieuses.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Chateau les religieuses</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_chateau_saint_robert.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Chateau Saint Robert</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_chateau_talbot.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Chateau Talbot</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_damati.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Damati</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_haut_medoc_nobles_tours.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Haut Medoc Nobles Tours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_hautes_terres_d'exception.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Hautes Terres D'exception</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_jp_chenet_merlot.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>JP Chenet Merlot</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_louis_eschenauer.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Louis Eschenauer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_medoc_ch_le_vieux_fort.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Medoc Ch le Vieux Fort</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_medoc_chateau_vieux_fort.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Medoc Chateau le Vieux Fort</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_montmeryac.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>MontMeryac</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_novacorte.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Novacorte</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rouge_si_mon_pere_savait.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Si Mon Pere Savait</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5><p><a href="#cave-2"> Vins Blancs</a></p></h5>
                                        <div id="cave-2" class="tab-pane fade show p-0 active">
                                            <div class="row g-4">
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_asolo_prosecco.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Asolo Prosecco</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_bergerac_moelleux_hautes_terres_d'exception.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Belgerac Moelleux Hautes Terres D'exception </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_bergerac_moelleux_nobles_tours.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Belgerac Moelleux Nobles Tours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_bordeau58.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Bordeaux 58 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_ch_rousseau_monbazillac.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Chateau Rousseau  MontBazillac</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_glen_scanlan.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Glen Scanlan</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_hautes_terres_d'exception.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Hautes Terres D'exception</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_louis_eschenauer.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Louis Eschenauer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_menuts_pierre_riviere.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Menuts Pierre Riviere</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_montmeyrac.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>MontMeryac</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_sauternes_louis_eschenauer.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Sauternes Louis Eschenauer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_uvita_sweet_white.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Uvita Sweet White</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/blanc_vinorico.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Vinorico</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5><p><a href="#cave-3"> Vins Roses</a></p></h5>
                                        <div id="cave-3" class="tab-pane fade show p-0 active">
                                            <div class="row g-4">
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/rosee_baron_d'avignac.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Baron D'Avignac</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5><p><a href="#cave-4"> Vins Mousseux</a></p></h5>
                                        <div id="cave-4" class="tab-pane fade show p-0 active">
                                            <div class="row g-4">
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/mouss_jp_chenet_ice1.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>JP Chenet Ice</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/mouss_jp_chenet_ice2.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>JP Chenet Ice</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/mouss_jp_chenet_ice3.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>JP Chenet Ice</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/mouss_jp_chenet_ice4.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>JP Chenet Ice</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/mouss_jp_chenet_ice5.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>JP Chenet Ice</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/mouss_pierlant.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Pierlant</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5><p><a href="#cave-5">Whisky</a></p></h5>
                                        <div id="cave-5" class="tab-pane fade show p-0 active">
                                            <div class="row g-4">
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_baileys.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Baileys </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_chevalier.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Chevalier</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_chivas_regal.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Chivas Regal</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_clan_macgregon.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Clan MacGregon</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_honey_black-scanlan.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Honey Black Scanlan</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_jack_daniels.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Jack Daniels</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_label5.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Label 5</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="service-item rounded pt-3">
                                                        <div class="p-4">
                                                            <img src="/assets/Telegram/whisky_monkey_shoulder.jpg" width="125px" height="125px">
                                                            <!-- <h5>Conseil de cuisine</h5> -->
                                                            <p>Monkey Shoulder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

@endsection