@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/certificaciones-alacermas.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>@lang('Certificaciones')</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap our-goal">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas Certificaciones">
            </figure>
            <h2>{{ translatePHP($certificacions, 'titol') }}</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="who-we-are">
                        {!! translatePHP($certificacions, 'descripcio') !!}
                    </div>
                </div>
                <div class="col-lg-6 px-3">
                    <div class="data">
                        <figure class="goal-img">
                            <img src='{{ asset("/storage/$certificacions->imatge1") }}' alt="Alacer Mas Certificaciones">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection