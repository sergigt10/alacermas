@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <x-bannerProduct :categoriaActual="$categoriaParent" />
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>{{ translatePHP($categoriaParent, 'nom') }}</h2>
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
                            {!! \App\Http\Controllers\CategoriaProducteController::getParentsTree($categoriaParent, translatePHP($categoriaParent, 'nom'), 'Frontend') !!}
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
                <x-columnaCategories :categoriaParent="translatePHP($categoriaParent, 'nom')" :subCategories="$subCategories"/>
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
                                                            <img src='{{ asset("/storage/$producte->imatge1") }}' alt="Alacer Mas, {{ translatePHP($producte, 'nom') }}" width="260" height="213">
                                                        </figure>
                                                    @else
                                                        <figure>
                                                            <img src='{{ asset('frontend/assets/images/no-foto.jpg') }}' alt="Alacer Mas, {{ translatePHP($producte, 'nom') }}" width="260" height="213">
                                                        </figure>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="data">
                                                <h3>
                                                    <a href="{{ route('frontend.productes.show', ['producte' => $producte->slug]) }}">
                                                        {{ Str::limit('Prod. '.ucfirst(translatePHP($producte, 'nom')), 28, '...');  }}
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
                                                            <img src='{{ asset("/storage/$categoria->imatge1") }}' alt="Alacer Mas, {{ translatePHP($categoria, 'nom') }}" width="260" height="213">
                                                        </figure>
                                                    @else
                                                        <figure>
                                                            <img src='{{ asset('frontend/assets/images/no-foto.jpg') }}' alt="Alacer Mas, {{ translatePHP($categoria, 'nom') }}" width="260" height="213">
                                                        </figure>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="data">
                                                <h3>
                                                    <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">
                                                        {{ Str::limit(translatePHP($categoria, 'nom'), 28, '...');  }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if ($productes->isEmpty() && ( count($subCategories) < 0 ))
                                <span class="text-center">
                                    <b>@lang("Información no disponible")</b>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection