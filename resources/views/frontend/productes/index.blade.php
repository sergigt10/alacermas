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
        @if ( $categoriaParent->parent_id !== NULL )
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="categoria-filter">
                            {!! \App\Http\Controllers\CategoriaProducteController::getParentsTree($categoriaParent, $categoriaParent->nom_esp, 'Frontend') !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <section class="gap buscador">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <x-searchHTML />
                    </div>
                </div>
            </div>
        </section>
        <div class="container mb-5">
            <div class="row">
                <x-columnaCategories :categoriaParent="$categoriaParent->nom_esp" :subCategories="$subCategories"/>
                <div class="col-lg-9">
                    <div class="container">
                        <div class="row p-slider align-items-center grid">
                            @foreach ($productes as $producte)
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
                                                    <a href="{{ route('frontend.productes.show', ['producte' => $producte->slug]) }}">
                                                        {{ Str::limit('Prod. '.ucfirst($producte->nom_esp), 28, '...');  }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="container mt-5">
                                <div class="row text-center">
                                    {{ $productes->links() }}
                                </div>
                            </div> --}}
                            @foreach ($subCategories as $categoria)
                                @if($categoriaParent->id == $categoria->id)
                                    @continue
                                @endif
                                <div class="col-lg-4">
                                    <div class="product">
                                        <div class="main-data">
                                            <div class="btn-hover">
                                                <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">
                                                    @if ($categoria->imatge1 !== NULL)
                                                        <figure>
                                                            <img src='{{ asset("/storage/$categoria->imatge1") }}' alt="Alacer Mas, {{ $categoria->nom_esp }}" width="260" height="213">
                                                        </figure>
                                                    @else
                                                        <figure>
                                                            <img src='{{ asset('frontend/assets/images/no-foto.jpg') }}' alt="Alacer Mas, {{ $categoria->nom_esp }}" width="260" height="213">
                                                        </figure>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="data">
                                                <h3>
                                                    <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">
                                                        {{ Str::limit($categoria->nom_esp, 28, '...');  }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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