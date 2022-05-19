@extends('user.layout')

@section('content')
    <div class="container">
        <center>
            <h1 class="text-white my-3">ABOUT US</h1>
        </center>
    </div>

    <div class="container">
        <div class="row g-0">
            <div class="row">
                <div class="col-7">
                    <div class="logoabout">
                        <img src="{{asset('user/assets/img/logo.png')}}" alt="">
                    </div>
                    <p class="my-4">
                        <strong>PARSIAL</strong>, merupakan sebuah wadah perusahaan yang mewadahi berbagai kebutuhan yang miliki pelanggan. Parsial memiliki arti seperti berikut. Selain itu Parsial sendiri di dirikan pada tahun 20xx.
                    </p>
                    <div class="kontak">
                        <div class="row justify-content-start">
                            <div class="col-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3838519070164!2d105.31266081422888!3d-5.358258955128541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c35634c1a611%3A0xcb3cf692dbb4f26!2sInstitut%20Teknologi%20Sumatera!5e0!3m2!1sid!2sid!4v1649698228067!5m2!1sid!2sid" width="210" height="140" style="border:3px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="col-6 mx-4">
                                <p class="text-white">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Jalan Ryacudu, Lampung Selatan
                                </p>
                                <p class="text-white">
                                    <i class="fab fa-whatsapp"></i>
                                    +62 812 - 7871 - 7477
                                </p>
                                <p class="text-white">
                                    <i class="far fa-envelope"></i>
                                    parsial@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="vl"></div>
                </div>
                <div class="col">
                    <div class="position-relative">
                        <center>
                            <h3 class="text-white">Our Team</h3>
                        </center>
                        <center>
                            <div class="col-8 border my-3">
                                <img src="{{asset('user/assets/img/profil2.png')}}" style="width: 80px; height: 90px;" class="rounded-circle" alt="Cinque Terre"> 
                                <h5 class="text-white">Mr. 4</h5>
                                <p>As a Marketing</p>
                            </div>
                        </center>
                        <center>
                            <div class="col-8 border my-3">
                                <img src="{{asset('user/assets/img/profil2.png')}}" style="width: 80px; height: 90px;" class="rounded-circle" alt="Cinque Terre"> 
                                <h5 class="text-white">Mr. 4</h5>
                                <p>As a Marketing</p>
                            </div>
                        </center>
                        <center>
                            <div class="col-8 border my-3">
                                <img src="{{asset('user/assets/img/profil2.png')}}" style="width: 80px; height: 90px;" class="rounded-circle" alt="Cinque Terre"> 
                                <h5 class="text-white">Mr. 4</h5>
                                <p>As a Marketing</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
