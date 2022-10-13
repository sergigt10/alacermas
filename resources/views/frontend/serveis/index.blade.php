@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/servicios-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Servicios</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap core-values">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>Medios técnicos y humanos</h2>
        </div>
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <div class="data">
                            <p>{!! $serveis->descripcio_esp_1 !!}</p>
                        </div>
                        <div class="image">
                            <figure>
                                <img src='{{ asset("/storage/$serveis->imatge_desc_1") }}' alt="Alacer Mas" class="img-fluid radius-img">
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <figure>
                                <img src='{{ asset("/storage/$serveis->imatge_desc_2") }}' alt="Alacer Mas" class="img-fluid radius-img">
                            </figure>
                        </div>
                        <div class="data">
                            <p>{!! $serveis->descripcio_esp_2 !!}</p>
                        </div>
                    </li>
                    <li>
                        <div class="data">
                            <p>{!! $serveis->descripcio_esp_3 !!}</p>
                        </div>
                        <div class="image">
                            <figure>
                                <img src='{{ asset("/storage/$serveis->imatge_desc_3") }}' alt="Alacer Mas" class="img-fluid radius-img">
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <figure>
                                <img src='{{ asset("/storage/$serveis->imatge_desc_4") }}' alt="Alacer Mas" class="img-fluid radius-img">
                            </figure>
                        </div>
                        <div class="data">
                            <p>{!! $serveis->descripcio_esp_4 !!}</p>
                        </div>
                    </li>
                    <li>
                        <div class="data">
                            <p>{!! $serveis->descripcio_esp_5 !!}</p>
                        </div>
                        <div class="image">
                            <figure>
                                <img src='{{ asset("/storage/$serveis->imatge_desc_5") }}' alt="Alacer Mas" class="img-fluid radius-img">
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="gallery-style-one">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_1") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_1") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_2") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_2") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_3") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_3") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_4") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_4") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_5") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_5") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_6") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_6") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_7") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_7") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a data-fancybox="gallery" href='{{ asset("/storage/$serveis->imatge_8") }}'>
                            <img class="img-fluid w-100" src='{{ asset("/storage/$serveis->imatge_8") }}' alt="Alacer Mas" >
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>

@endsection