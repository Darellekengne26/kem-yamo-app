@extends('base.base', ['title' => 'Kem Yamo Restaurant |'] )

@section('content')
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"> Reservation</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="open-btn">
                        <button class="btn btn-primary w-80 py-3" onclick="openForm()">Cliquer ici pour reserver</button>
                    </div>
                    <div class="login-popup">
                        <div class="form-popup" id="popupForm">
                            <form action ="/action_page.php" class="form-container">
                                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                                <h1 class="text-black mb-4">Reservation En Ligne</h1>
                                <div class="row g-3">
                                    <div  class="col-md-6">
                                        <div class="form-floating"> 
                                            <input placeholder="Votre Nom" type="text" class="form-control" id="name">
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-floating"> 
                                            <input type="email" class="form-control" id="email" placeholder="Votre Numero">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" placeholder="Nombre De Place">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" placeholder="Detaillez ici ce que vous voulez pour votre reservation" type="text" id="message" style="height: 150px; width: 570px">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">RESERVER</button>
                                    </div>
                                </div> 
                            </form>
                        </div>    
                    </div>
                    <script>
                        function openForm(){
                            document.getElementById("popupForm").style.display = "block";
                        }
                    </script>
                </div>
            </div>    
        </div> 
        <!-- Reservation End -->
        

@endsection