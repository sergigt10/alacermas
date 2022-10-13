@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/historia-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Trabaja con nosotros</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap contact-form-2">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>Formulario</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="data">
                        <p>Tú puedes ser parte de nuestro equipo, trabaja en un empresa con respaldo y crecimiento profesional. Envíanos tus datos.</b></p>
                        <p>También puede enviarnos un correo electrónico a: <b>recursoshumanos@alacermas.com</b></p>
                        <br>
                        <p>* Campos obligatorios</p>
                        <br>
                        <form>
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
                                <input type="text" name="localidad" class="form-control" id="exampleInput" placeholder="Localidad *" required>
                            </div>
                            <div class="row g-0">
                                <input type="text" name="pais" class="form-control" id="exampleInput" placeholder="País *" required>
                            </div>
                            <div class="row g-0">
                                <p>Subir currículum vitae. Formato aceptado: PDF o DOC/DOCX</p>
                                <input type="file" name="curriculum" accept=".doc,.docx,application/msword,.pdf" required/>
                            </div>
                            <div class="row g-0">
                                <textarea name="msg" placeholder="Mensaje *" required></textarea>
                            </div>
                            <div class="row g-0">
                                <input type="checkbox" class="form-checkbox" value="privacidad" required> <label style="width: 50%" for="cbox2">He leído y acepto la <a href="{{ route('frontend.politicaPrivacitat.index') }}" target="_blank">política de privacidad</a></label>
                            </div>
                            
                            <button type="submit" class="theme-btn">Enviar <i class="fa-solid fa-angles-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection