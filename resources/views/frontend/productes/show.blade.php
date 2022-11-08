@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/servicios-alacermas.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>{{ ucfirst(translatePHP($producte, 'nom')) }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap product-detail light-bg-transparent">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="categoria-filter">
                        {!! \App\Http\Controllers\CategoriaProducteController::getParentsTree($producte->categoria, translatePHP($producte->categoria, 'nom'), 'Frontend') !!}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="gap buscador">
                        <x-searchHTML />
                    </div>
                </div>
                <x-columnaCategories :categoriaParent="translatePHP($producte->categoria, 'nom')" :subCategories="$subCategories"/>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="pd-data">
                                <h1>{{ ucfirst(translatePHP($producte, 'nom')) }}</h1>
                                <br>
                                <div class="text-justify">
                                    {!! translatePHP($producte, 'descripcio') !!}
                                </div>
                                <div class="pd-cat-tags">
                                    <ul>
                                        <li>
                                            @if ($producte->pdf)
                                                <span class="theme-bg-clr font-bold">
                                                    <i class="fa-regular fa-file"></i> <a href="{{ asset("/storage/$producte->pdf") }}" target="_blank" style="color:#0d476d">Catálogo</a>
                                                </span>
                                                &nbsp;-&nbsp;&nbsp;&nbsp;
                                            @endif
                                            <span class="theme-bg-clr font-bold">
                                                <i class="fa-regular fa-file-pdf"></i> <a href="{{ route('pdf', ['producte' => $producte->slug]) }}" target="_blank" style="color:#0d476d">Generar PDF</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <br><br><br>
                            @if ($producte->imatge1 !== NULL)
                                <img src="{{ asset("/storage/$producte->imatge1") }}" alt="Alacer Mas, {{ translatePHP($producte, 'nom') }}" class="img-fluid">
                            @else
                                <img src='{{ asset('frontend/assets/images/no-foto.jpg') }}' alt="Alacer Mas, {{ translatePHP($producte, 'nom') }}">
                            @endif
                            
                            @if ($producte->imatge2)
                                <div class="imatge-2 mt-4">
                                    <img src="{{ asset("/storage/$producte->imatge2") }}" alt="Alacer Mas, {{ translatePHP($producte, 'nom') }}" class="img-fluid">
                                </div>
                            @endif
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
                                            <div class="table-responsive">
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
            </div>
        </section>
    @endif

@endsection