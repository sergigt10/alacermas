@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/historia-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Alacer Mas</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap contact-form-2">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>@lang("Aviso legal")</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="data">
                        <p>En complimiento de lo establecido a la Ley 34/2002 d’11 de Julio, de Servicios de la Sociedad de La Información y el Comercio Electrónico (LSSICE), se informa de les siguientes aspectos legales:</p>
                        <br>
                        <p><b>Identificación de la web:</b></p>
                        <p>www.alacermas.com</p>
                        <br>
                        <p><b>Responsable de la web:</b></p>
                        <p>ALACER MAS, S.L.</p>
                        <br>
                        <p><b>Dirección:</b></p>
                        <p>RONDA AGRICULTURA, 15 P.I. RONDA, 08503 – GURB (BARCELONA)</p>
                        <br>
                        <p><b>E-mail de contacto:</b></p>
                        <p>lopd@alacermas.com</p>
                        <br>
                        <p><b>Telefono de contacto:</b></p>
                        <p>93 886 39 31</p>
                        <br>
                        <p><b>Datos Fiscales:</b></p>
                        <p>B66131962</p>
                        <br>
                        <p><b>Datos Registrales:</b></p>
                        <p>Inscrita en el Registro Mercantil de Barcelona, Tomo 44022. , Folio 124, Hoja B-444785</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection