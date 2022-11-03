@extends('frontend.layouts.app')

@section('content')
    <section class="featured-section-three">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-2.png') }});"></div>
            <div class="container">
                <div class="row space align-items-center">
                    <div class="col-lg-6">
                        <div class="data">
                            <h2>Distribución de productos <span style="color: #CCCCCC">Acero inoxidable</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="data space">
                            <p>Aluminio, metales no férricos, plásticos técnicos y todos los suministros industriales que pueden intervenir en los procesos de transformación de estos materiales. Contamos con maquinaria para aplanar y cortar chapa.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="image">
                            <video autoplay muted loop>
                                <source src="{{ asset('frontend/assets/videos/video.mp4') }}" type="video/mp4">
                                No se puede reproducir
                            </video>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="gap history-style-one">
        <div class="heading heading-style-3">
            <img src="{{ asset('frontend/assets/images/icona.png') }}"/>
            <h2><span style="color: #0D476D">ALACER MAS</span> es un centro de distribución de productos de <span>acero inoxidable</span></h2>
            <p>Aluminio, metales no férricos, plásticos técnicos y todos los suministros industriales que pueden intervenir en los procesos de transformación de estos materiales. Contamos con maquinaria para aplanar y cortar chapa. En nuestras instalaciones usted podrá encontrar todo lo que necesite en Acero Inoxidable, desde una chapa hasta una bisagra. </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="{{ route('frontend.productes.index', ['categoria' => 'acero-inoxidable']) }}">
                        <div class="history-data">
                            <figure>
                                <img class="w-100" src="{{ asset('frontend/assets/images/acero-inox.jpg') }}" alt="Alacer Mas acero inoxidable">
                            </figure>
                            <div class="details">
                                <h3>Acero inoxidable</h3>
                                <p>Contamos con varias líneas de pulido y satinado de tubos y  perfiles, para decoración y para la industria alimentaria y farmacéutica.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="{{ route('frontend.productes.index', ['categoria' => 'normalizados-inoxidable']) }}">
                        <div class="history-data">
                            <figure>
                                <img class="w-100" src="{{ asset('frontend/assets/images/normalizados-inoxidable.jpg') }}" alt="Alacer Mas acero inoxidable">
                            </figure>
                            <div class="details">
                                <h3>Normalizados inoxidable</h3>
                                <p>Los cilindros inoxidables que fabricamos están dentro de la norma ISO. Son intercambiables con las marcas existentes en el mercados.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="{{ route('frontend.productes.index', ['categoria' => 'suministros-industriales']) }}">
                        <div class="history-data">
                            <figure>
                                <img class="w-100" src="{{ asset('frontend/assets/images/suministros-industriales.jpg') }}" alt="Alacer Mas acero inoxidable">
                            </figure>
                            <div class="details">
                                <h3>Suministros Industriales</h3>
                                <p>Somos una empresa de suministros industriales con experiencia, tornillería industrial, abrasivos y maquinaria, herramientas y ferretería industrial.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="{{ route('frontend.productes.index', ['categoria' => 'aluminio']) }}">
                        <div class="history-data">
                            <figure>
                                <img class="w-100" src="{{ asset('frontend/assets/images/alumi.jpg') }}" alt="Alacer Mas acero inoxidable">
                            </figure>
                            <div class="details">
                                <h3>Aluminio</h3>
                                <p>Empresa dedicada a la venta y distribución de chapas y perfiles de aluminio a medida y en aleaciones especiales.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="gap what-we-build">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-5.png') }});"></div>
        <div class="heading-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="data">
                            <span>Nuestros centros</span>
                            <h2>Centros Alacer</h2>
                        </div>
                    </div> 
                    <div class="col-lg-6"></div>         
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <ul class="wwb-ul">
                    @foreach ($centres as $centre)
                        @if ( $centre->id == 2 )
                            <li class="active">
                        @else
                            <li>
                        @endif
                                <h3><a href="{{ route('frontend.centres.index') }}">{{ $centre->titol_esp }}</a></h3>
                                <a href="{{ route('frontend.centres.index') }}">
                                    <span class="location">
                                        <span>Localización:</span>
                                        <span>{{ $centre->localitzacio }}</span>
                                    </span>
                                </a>
                                <a href="{{ route('frontend.centres.index') }}">
                                    <figure>
                                        <img src='{{ asset("/storage/$centre->imatge1") }}' alt="Alacer Mas {{ $centre->localitzacio }}">
                                    </figure>
                                </a>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection