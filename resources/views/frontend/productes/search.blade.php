@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/servicios-alacermas.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Productos</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="gap product-style-one addition">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row p-slider align-items-center grid">
                            <div class="col-lg-12 mt-5">
                                <a href="{{ url()->previous() }}"><i class="fas fa-chevron-left"></i> Volver atràs</a>
                            </div>
                            @if (!$productes->isEmpty()) 
                                @foreach ($productes as $producte)
                                    @if ($producte->actiu == 0)
                                        @continue
                                    @endif
                                    <div class="col-lg-4">
                                        <div class="product">
                                            <div class="main-data">
                                                <div class="btn-hover">
                                                    <a href="{{ route('frontend.productes.show', ['producte' => $producte->slug]) }}">
                                                        @if ($producte->imatge1 !== NULL)
                                                            <figure>
                                                                <img src='{{ asset("/storage/$producte->imatge1") }}' alt="Alacer Mas, {{ $producte->nom_esp }}" width="260" height="213">
                                                            </figure>
                                                        @else
                                                            <figure>
                                                                <img src='{{ asset('frontend/assets/images/no-foto.jpg') }}' alt="Alacer Mas, {{ $producte->nom_esp }}" width="260" height="213">
                                                            </figure>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="data">
                                                    <h3>
                                                        <a href="{{ route('frontend.productes.show', ['producte' => $producte->slug]) }}">{{ $producte->nom_esp }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="container mt-5">
                                    <div class="row text-center">
                                        {{ $productes->links() }}
                                    </div>
                                </div>
                            @else
                                <span class="text-center">
                                    <b>Producto no encontrado...</b>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection