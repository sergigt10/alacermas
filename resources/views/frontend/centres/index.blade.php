@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/centros-alacermas.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Centros</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap no-top project-completed our-projects-one">
        @foreach ($centres as $centre)
            <div class="prj-post">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="proj-data">
                                <h4>{{ $centre->titol_esp }}</h4>
                                <br>
                                <div>{!! $centre->descripcio_esp !!}</div>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="data">
                                <figure>
                                    <img src='{{ asset("/storage/$centre->imatge1") }}' alt="Alacer Mas {{ $centre->localitzacio }}">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection