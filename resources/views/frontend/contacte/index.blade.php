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
                    <h2>Contacto</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap contact-form-2">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>Formulario de contacto</h2>
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
                        <p>Si desea ponerse en contacto con nosotros sólo tiene que rellenar el siguiente formulario o bien contactar a través del teléfono <b>(+34) 93 562 08 18</b></p>
                        <p>También puede enviarnos un correo electrónico a: <b>alacermas@alacermas.com</b></p>
                        <br>
                        <p>* Campos obligatorios</p>
                        <br>
                        <form action="{{route('frontend.sendContacte')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-0">
                                <input type="text" name="nom-cognoms" class="form-control" id="exampleInputText1"  placeholder="Nombre y apellidos *" required>
                            </div>
                            <div class="row g-0">
                                <input type="email" name="mail" class="form-control" id="exampleInputEmail1"  placeholder="Correo electrónico *" required>
                            </div>
                            <div class="row g-0">
                                <input type="text" name="phone" class="form-control" id="exampleInput" placeholder="Teléfono *" required>
                            </div>
                            <div class="row g-0">
                                <input type="text" name="empresa" class="form-control" id="exampleInput" placeholder="Empresa">
                            </div>
                            <div class="row g-0">
                                <input type="text" name="localidad" class="form-control" id="exampleInput" placeholder="Localidad">
                            </div>
                            <div class="row g-0">
                                <input type="text" name="pais" class="form-control" id="exampleInput" placeholder="País">
                            </div>
                            <div class="row g-0">
                                <p>Actividad:</p>
                                <select name="actividad">
                                    <option value="Distribuidor">Distribuidor</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                            <div class="row g-0">
                                <p>Departamento:</p>
                                <select name="departamento">
                                    <option value="Compras">Compras</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Administración">Administración</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                            <div class="row g-0">
                                <p>Subir archivo. Max: 10 MB. Formato aceptado: PDF o DOC/DOCX</p>
                                <input type="file" data-maxsize="10" name="archivo" accept=".doc,.docx,application/msword,.pdf" />
                            </div>
                            <div class="row g-0">
                                <textarea name="msg" placeholder="Mensaje *" required></textarea>
                            </div>
                            <div class="row g-0">
                                <input type="checkbox" class="form-checkbox" value="privacidad" required> <label style="width: 50%" for="cbox2">He leído y acepto la <a href="{{ route('frontend.politicaPrivacitat.index') }}" target="_blank">política de privacidad</a></label>
                            </div>
                            <div class="row g-0">
                                <div class="g-recaptcha" data-sitekey="6LcxjHQUAAAAAACkW6DnZ_zwpRVtOXvg6qh5Epiy" data-callback="enableBtn"></div>
                            </div>

                            <button type="submit" id="submit_details" class="theme-btn" disabled>Enviar <i class="fa-solid fa-angles-right"></i></button>
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
    
    
@endsection