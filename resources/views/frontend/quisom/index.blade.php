@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/quienes-somos-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Quiénes somos</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap about-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-data-left">
                        <figure>
                            <img src='{{ asset("/storage/$quisom->imatge_pres1") }}' alt="Alacer Mas quiénes somos">
                        </figure>
                        <figure class="about-image">
                            <img src='{{ asset("/storage/$quisom->imatge_pres2") }}' alt="Alacer Mas quiénes somos">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-data-right">
                        <span>Alacer Mas</span>
                        <h2>Presentación</h2>
                        <div class="about-info">
                            <p>{!! $quisom->descripcio_esp_pres !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap no-top core-values margin-top-mision">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>Misión y objetivos</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="who-we-are">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <p>{!! $quisom->descripcio_esp_obje !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 px-4">
                                <figure>
                                    <img src='{{ asset("/storage/$quisom->imatge_obje1") }}' alt="Alacer Mas" class="img-fluid">
                                </figure>
                                <br>
                                <figure>
                                    <img src='{{ asset("/storage/$quisom->imatge_obje2") }}' alt="Alacer Mas" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap no-top core-values">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>Video Alacer Mas</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="who-we-are">
                        <div class="row">
                            <div class="col-lg-6 px-4">
                                <video width="100%" poster='{{ asset("/frontend/assets/images/video.jpg") }}' controls preload="none">
                                    <!-- MP4 source must come first for iOS -->
                                    <source type="video/mp4" src='{{ asset("/frontend/assets/videos/video-2.mp4") }}' />
                                </video>
                            </div>
                            <div class="col-lg-6">
                                <p>{!! $quisom->descripcio_esp_video !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection