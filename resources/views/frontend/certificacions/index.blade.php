@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/servicios-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Certificaciones</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap our-goal">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>{{ $certificacions->titol_esp }}</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="who-we-are">
                        {!! $certificacions->descripcio_esp !!}
                    </div>
                </div>
                <div class="col-lg-6 px-3">
                    <div class="data">
                        <figure class="goal-img">
                            <img src='{{ asset("/frontend/assets/images/certificaciones.jpg") }}' alt="Alacer Mas">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection