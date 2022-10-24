@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/producto-alacermas.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Productos</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="gap product-style-one addition">
        @if ( $categoriaParent->parent_id !== NULL )
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categoria-filter">
                            {!! \App\Http\Controllers\CategoriaProducteController::getParentsTreeFrontend($categoriaParent, $categoriaParent->nom_esp) !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="categorias">
                        <span class="categorias-parent"><b>{{ $categoriaParent->nom_esp }}</b></span>
                        {{-- <i class="fa-sharp fa-solid fa-angle-down"></i> --}}
                        @foreach ($subCategories as $categoria)
                            <li class="categoria">
                                <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">{{ $categoria->nom_esp }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="container">
                        <div class="row p-slider align-items-center grid">
                            @if (!$productes->isEmpty()) 
                                @foreach ($productes as $producte)
                                    <div class="col-lg-4">
                                        <div class="product">
                                            <div class="main-data">
                                                <div class="btn-hover">
                                                    <a href="{{ route('frontend.productes.show', ['producte' => $producte->slug]) }}">
                                                        @if ($producte->imatge1)
                                                            <figure>
                                                                <img src='{{ asset("/storage/$producte->imatge1") }}' alt="Alacer Mas, {{ $producte->nom_esp }}">
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
                                @foreach ($subCategories as $categoria)
                                    <div class="col-lg-4">
                                        <div class="product">
                                            <div class="main-data">
                                                <div class="btn-hover">
                                                    <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">
                                                        @if ($categoria->imatge1)
                                                            <figure>
                                                                <img src='{{ asset("/storage/$categoria->imatge1") }}' alt="Alacer Mas, {{ $categoria->nom_esp }}">
                                                            </figure>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="data">
                                                    <h3>
                                                        <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">{{ $categoria->nom_esp }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            @if ($productes->isEmpty() && $subCategories->isEmpty())
                                <span class="text-center">
                                    <b>Información no disponible</b>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection