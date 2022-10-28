@extends('frontend.layouts.app')

@section('content')
<section class="banner-style-one">
    <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/servicios-alacermas.jpg') }});"></div>
    <div class="container">
        <div class="row">
            <div class="banner-details">
                <h2>Error 404</h2>
            </div>
        </div>
    </div>
</section>

<section class="gap product-detail light-bg-transparent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                Página no disponible. <a href="{{ route('frontend.inici.index') }}">Volver a la página de inicio</a>
            </div>
        </div>
    </div>
</section>

@endsection