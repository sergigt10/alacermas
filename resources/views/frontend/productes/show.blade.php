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

    <section class="gap product-detail light-bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="categoria-filter">
                        {!! \App\Http\Controllers\CategoriaProducteController::getParentsTreeFrontend($producte->categoria, $producte->categoria->nom_esp) !!}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="gap buscador">
                        <div class="update-buscador d-flex-all justify-content-between">
                            <form>
                                <input type="text" name="text" placeholder="Buscador">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="categorias">
                        <span class="categorias-parent"><b>{{ $producte->categoria->nom_esp }}</b></span>
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
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="pd-data">
                                    <h2>{{ $producte->nom_esp }}</h2>
                                    <br>
                                    <div class="text-justify">
                                        {!! $producte->descripcio_esp !!}
                                    </div>
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
                            <div class="col-lg-4">
                                <br><br><br>
                                <img src="{{ asset("/storage/$producte->imatge1") }}" alt="Alacer Mas, {{ $producte->nom_esp }}" class="img-fluid">
                                @if ($producte->imatge2)
                                    <div class="imatge-2 mt-4">
                                        <img src="{{ asset("/storage/$producte->imatge2") }}" alt="Alacer Mas, {{ $producte->nom_esp }}" class="img-fluid">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (!$producte->taules->isEmpty())
        <section class="gap detail-page light-bg-color">
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
                                            <table class="table table-bordered table-hover">
                                                @foreach ($producte->taules as $producteTaula)
                                                    {{ \App\Http\Controllers\ProductesFrontendController::excelProduct(__DIR__ .'/../../app/public/'.$producteTaula->excel, $producteTaula->files_th_excel) }}
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection