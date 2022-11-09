@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/quienes-somos-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>@lang("Quiénes somos")</h2>
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
                        <h2>@lang("Presentación")</h2>
                        <div class="about-info">
                            <p>
                                @if (app()->getLocale() === 'ca')
                                    {!! $quisom->descripcio_cat_pres !!}
                                @elseif (app()->getLocale() === 'fr')
                                    {!! $quisom->descripcio_fra_pres !!}
                                @elseif (app()->getLocale() === 'en')
                                    {!! $quisom->descripcio_eng_pres !!}
                                @else
                                    {!! $quisom->descripcio_esp_pres !!}
                                @endif
                            </p>
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
            <h2>@lang("Misión y objetivos")</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="who-we-are paragraph">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <p>
                                        @if (app()->getLocale() === 'ca')
                                            {!! $quisom->descripcio_cat_obje !!}
                                        @elseif (app()->getLocale() === 'fr')
                                            {!! $quisom->descripcio_fra_obje !!}
                                        @elseif (app()->getLocale() === 'en')
                                            {!! $quisom->descripcio_eng_obje !!}
                                        @else
                                            {!! $quisom->descripcio_esp_obje !!}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 px-4">
                                <figure>
                                    <img src='{{ asset("/storage/$quisom->imatge_obje1") }}' alt="Alacer Mas" class="img-fluid">
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
            <h2>@lang("Video Alacer Mas")</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="who-we-are paragraph">
                        <div class="row">
                            <div class="col-lg-6 px-4">
                                <video width="100%" poster='{{ asset("/frontend/assets/images/video.jpg") }}' controls preload="none">
                                    <!-- MP4 source must come first for iOS -->
                                    <source type="video/mp4" src='{{ asset("/frontend/assets/videos/video-2.mp4") }}' />
                                </video>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    @if (app()->getLocale() === 'ca')
                                        {!! $quisom->descripcio_cat_video !!}
                                    @elseif (app()->getLocale() === 'fr')
                                        {!! $quisom->descripcio_fra_video !!}
                                    @elseif (app()->getLocale() === 'en')
                                        {!! $quisom->descripcio_eng_video !!}
                                    @else
                                        {!! $quisom->descripcio_esp_video !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection