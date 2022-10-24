@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/servicios-alacermas.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>{{ $producte->nom_esp }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap product-detail light-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <br><br>
                    <img src="{{ asset("/storage/$producte->imatge1") }}" alt="Alacer Mas, {{ $producte->nom_esp }}">
                </div>
                <div class="col-lg-6">
                    <div class="pd-data">
                        <h2>{{ $producte->nom_esp }}</h2>
                        <br>
                        <div class="text-justify">
                            {!! $producte->descripcio_esp !!}
                        </div>
                        @if ($producte->imatge2)
                            <div class="imatge-2 mt-4">
                                <img src="{{ asset("/storage/$producte->imatge2") }}" alt="Alacer Mas, {{ $producte->nom_esp }}">
                            </div>
                        @endif
                        <div class="pd-cat-tags">
                            @if ($producte->pdf)
                                <ul>
                                    <li>
                                        <span class="theme-bg-clr font-bold">
                                            <i class="fa-regular fa-file"></i> <a href="{{ asset("/storage/$producte->pdf") }}" target="_blank" style="color:#0d476d">Catálogo</a>
                                        </span>
                                    </li>
                                </ul>
                            @endif
                            <ul>
                                <li>
                                    <span class="theme-bg-clr font-bold">
                                        <i class="fa-regular fa-file-pdf"></i> <a href="{{ asset("/storage/$producte->pdf") }}" target="_blank" style="color:#0d476d">Descargar PDF</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap detail-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-details">
                        <div class="more d-flex align-items-start">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Información técnica</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="des-tab">
                                        <h3>About Product</h3>
                                        <p>Galvafroid zinc rich cold galvanising coating is formulated as an easily applied protection against corrosion on all ferrous metals. Galvafroid has a mid-grey, matt finish.</p>
                                        <p>new technologies. Our portfolio includes dozens of successfully completed projects of houses of different storeys, with high–quality finishes and good repairs. Building houses is our vocation!</p>
                                        <ul class="sm-circle">
                                            <li>Protects ferrous metals against rust</li>
                                            <li>Suitable as a primer or self-finish</li>
                                            <li>Easily applied by brush or roller</li>
                                        </ul>
                                        <figure>
                                            <img class="w-100" src="assets/images/pd-des-img.jpg" alt="Description Image">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection