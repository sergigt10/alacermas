@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/historia-alacermas.png') }});"></div>
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
                    <div class="categoria-filter">
                        @if ( $categoriaParent->parent_id !== NULL )
                            <a href="{{ route('frontend.productes.index') }}">Productos / &nbsp;</a>{!! \App\Http\Controllers\CategoriaProducteController::getParentsTreeFrontend($categoriaParent, $categoriaParent->nom_esp) !!}
                        @else
                            <a href="{{ route('frontend.productes.index') }}">Productos</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="categorias">
                        <span class="categorias-parent"><b>{{ $categoriaParent->nom_esp }}</b></span>
                        {{-- <i class="fa-sharp fa-solid fa-angle-down"></i> --}}
                        @foreach ($subCategories as $categoria)
                            <li class="categoria">
                                <a href="{{ route('frontend.productes.subcategories', ['categoria' => $categoria->slug]) }}">{{ $categoria->nom_esp }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="container">
                        <div class="row p-slider align-items-center grid">
                            @foreach ($subCategories as $categoria)
                                <div class="col-lg-4">
                                    <div class="product">
                                        <div class="main-data">
                                            <div class="btn-hover">
                                                <a href="{{ route('frontend.productes.subcategories', ['categoria' => $categoria->slug]) }}">
                                                    <figure>
                                                        <img src='{{ asset("/storage/$categoria->imatge1") }}' alt="Alacer Mas, {{ $categoria->nom_esp }}">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="data">
                                                <h3>
                                                    <a href="{{ route('frontend.productes.subcategories', ['categoria' => $categoria->slug]) }}">{{ $categoria->nom_esp }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div class="container">
            <div class="row">
                <div class="builty-pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)"><i class='fa-solid fa-arrow-left-long'></i></a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">01</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">02</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">03</a></li>
                            <li class="page-item space"><a class="page-link" href="JavaScript:void(0)">..........</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">08</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)"><i class='fa-solid fa-arrow-right-long'></i> </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> --}}
    </section>
@endsection