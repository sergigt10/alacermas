@extends('frontend.layouts.app')

@section('styles')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/contacto-alacermas.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>@lang("Contacto")</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap contact-form-2">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>@lang("Formulario de contacto")</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="data">
                        @if(session('message_mail'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message_mail') }}
                            </div>
                        @endif
                        @if(session('message_mail'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error_message_mail') }}
                            </div>
                        @endif
                        <p>@lang("Si desea ponerse en contacto con nosotros sólo tiene que rellenar el siguiente formulario o bien contactar a través del teléfono") <b>(+34) 93 562 08 18</b></p>
                        <p>@lang("También puede enviarnos un correo electrónico a:") <b>alacermas@alacermas.com</b></p>
                        <br>
                        <p>* @lang("Campos obligatorios")</p>
                        <br>
                        <form action="{{route('frontend.sendContacte')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-0">
                                <input type="text" name="nom-cognoms" class="form-control" id="exampleInputText1"  placeholder="@lang('Nombre y apellidos') *" required>
                            </div>
                            <div class="row g-0">
                                <input type="email" name="mail" class="form-control" id="exampleInputEmail1"  placeholder="@lang('Correo electrónico') *" required>
                            </div>
                            <div class="row g-0">
                                <input type="text" name="phone" class="form-control" id="exampleInput" placeholder="@lang('Teléfono') *" required>
                            </div>
                            <div class="row g-0">
                                <input type="text" name="empresa" class="form-control" id="exampleInput" placeholder="@lang('Empresa')">
                            </div>
                            <div class="row g-0">
                                <input type="text" name="localidad" class="form-control" id="exampleInput" placeholder="@lang('Localidad')">
                            </div>
                            <div class="row g-0">
                                <input type="text" name="pais" class="form-control" id="exampleInput" placeholder="@lang('País')">
                            </div>
                            <div class="row g-0">
                                <p>@lang('Actividad:')</p>
                                <select name="actividad">
                                    <option value="Distribuidor">@lang('Distribuidor')</option>
                                    <option value="Otros">@lang('Otros')</option>
                                </select>
                            </div>
                            <div class="row g-0">
                                <p>@lang('Departamento:')</p>
                                <select name="departamento">
                                    <option value="Compras">@lang('Compras')</option>
                                    <option value="Comercial">@lang('Comercial')</option>
                                    <option value="Administración">@lang('Administración')</option>
                                    <option value="Otros">@lang('Otros')</option>
                                </select>
                            </div>
                            <div class="row g-0">
                                <p>@lang('Subir archivo. Max: 10 MB. Formato aceptado: PDF o DOC/DOCX')</p>
                                <input type="file" data-maxsize="10" name="archivo" accept=".doc,.docx,application/msword,.pdf" />
                            </div>
                            <div class="row g-0">
                                <textarea name="msg" placeholder="Mensaje *" required></textarea>
                            </div>
                            <div class="row g-0">
                                <input type="checkbox" class="form-checkbox" value="privacidad" required> <label style="width: 50%" for="cbox2">@lang('He leído y acepto la') <a href="{{ route('frontend.politicaPrivacitat.index') }}" target="_blank">@lang('política de privacidad')</a></label>
                            </div>
                            <div class="row g-0">
                                <div class="g-recaptcha" data-sitekey="6LcxjHQUAAAAAACkW6DnZ_zwpRVtOXvg6qh5Epiy" data-callback="enableBtn"></div>
                            </div>

                            <button type="submit" id="submit_details" class="theme-btn" disabled>@lang('Enviar') <i class="fa-solid fa-angles-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('scripts')
    <script>
        function enableBtn(){
            document.getElementById("submit_details").disabled = false;
        }
    </script>
@endsection

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Business Central",
            "name": "Alacermas",
            "image": "https://www.alacermas.com/frontend/assets/images/logo.png",
            "description": "Alacer Mas es un centro de distribución de productos de acero inoxidable, aluminio y suministros industriales.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Polígono Industrial Ronda, Ronda de la Agricultura, 15",
                "postalCode": "08503",
                "addressLocality": "Gurb",
                "addressRegion": "Cataluña",
                "addressCountry": "España"
        },
        "openingHours": [
            "Mo-Fr 08:00-18:00"
        ],
            "telephone": "+34938863931"
        }
    </script>
    
@endsection