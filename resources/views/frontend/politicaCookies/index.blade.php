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
            <h2>@lang("Política de cookies")</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="data">
                        <p>Una "Cookie" es un pequeño archivo que se almacena en el ordenador del usuario y nos permite reconocerle. El conjunto de "cookies" nos ayuda a mejorar la calidad de nuestra web, permitiéndonos controlar qué páginas encuentran nuestros usuarios útiles y cuáles no.</p>
                        <br>
                        <p>Las cookies son esenciales para el funcionamiento de internet, aportando innumerables ventajas en la prestación de servicios interactivos, facilitándole la navegación y usabilidad de nuestra web. Tenga en cuenta que las cookies no pueden dañar su equipo y que, a cambio, el que estén activadas nos ayudan a identificar y resolver los errores.</p>
                        <br>
                        <p>La información que le proporcionamos a continuación, le ayudará a comprender los diferentes tipos de cookies:</p>
                        <br>
                        <p><b>- Cookies de sesión:</b> son cookies temporales que permanecen en el archivo de cookies de su navegador hasta que abandone la página web, por lo que ninguna queda registrada en el disco duro del usuario. La información obtenida por medio de estas cookies, sirven para analizar pautas de tráfico en la web. A la larga, esto nos permite proporcionar una mejor experiencia para mejorar el contenido y facilitando su uso.</p>
                        <p><b>- Cookies permanentes:</b> son almacenadas en el disco duro y nuestra web las lee cada vez que usted realiza una nueva visita. Una cookie permanente posee una fecha de expiración determinada. La cookie dejará de funcionar después de esa fecha.</p>
                        <p>A continuación publicamos una relación de las principales cookies utilizadas en nuestra Web, distinguiendo:</p>
                        <p><b>- Las cookies estrictamente</b> necesarias como por ejemplo, aquellas que sirvan para una correcta navegación o las que permitan realizar servicios solicitados por el usuario o cookies que sirvan para asegurar que el contenido de la página web se carga eficazmente.</p>
                        <p><b>- Las cookies de terceros</b> como por ejemplo, las usadas por redes sociales, o por complementos externos de contenido.</p>
                        <br>
                        <p>Las cookies analíticas con propósitos de mantenimiento periódico, y en aras de garantizar el mejor servicio posible al usuario, los sitios web´s hacen uso normalmente de cookies "analíticas" para recopilar datos estadísticos de la actividad.</p>
                        <br>
                        <p><b>RELACIÓN Y DESCRIPCIÓN DE LAS COOKIES QUE UTILIZAMOS EN LA PÁGINA WEB:</b></p>
                        <br>
                        <p>La tabla que publicamos a continuación recoge de forma esquematizada las cookies que utilizamos en nuestra página web: www.alacermas.com</p>
                        <br>
                        <p>_ga: Se usa para distinguir a los usuarios. 2 años</p>
                        <p>_gat: Se usa para diferenciar entre los diferentes objetos de seguimiento creados en la sesión. La cookie se crea al cargar la librería javascript y no existe una versión previa de la cookie _gat. La cookie se actualiza cada vez que envía los datos a Google Analytics. 10 min</p>
                        <p>_gid: Se genera de forma automática de forma transparente para la Web debido a ciertos códigos de medición o terceros 1 día Garantías complementarias</p>
                        <br>
                        <p><b>– Gestión de cookies:</b></p>
                        <br>
                        <p>Como garantía complementaria a las anteriormente descritas, el registro de las cookies podrá estar sujeto a su aceptación durante la instalación o puesta al día del navegador usado, y esta aceptación puede en todo momento ser revocada mediante las opciones de configuración de contenidos y privacidad disponibles.</p>
                        <br>
                        <p>Muchos navegadores permiten activar un modo privado mediante el cual las cookies se borran siempre después de su visita. Dependiendo de cada navegador este modo privado, puede tener diferentes nombres. A continuación, encontrará una lista de los navegadores más comunes y los diferentes nombres de este “modo privado”:</p>
                        <br>
                        <p>Internet Explorer 8 y superior; In Private Safari 2 y superior; Navegación Privada Opera 10.5 y superior; Navegación Privada FireFox 3.5 y superior; Navegación Privada Google Chrome 10 y superior; Incógnito</p>
                        <br>
                        <p>Asimismo, Para permitir, conocer, bloquear o eliminar las cookies instaladas en tu equipo puedes hacerlo mediante la configuración de las opciones del navegador instalado en tu ordenador.Por ejemplo, puedes encontrar información sobre cómo hacerlo en el caso que uses como navegador:</p>
                        <br>
                        <p>
                            <b>Internet Explorer desde aquí:</b>
                            <br>
                            http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9
                            <br>
                            <b>Safari desde aquí:</b>
                            <br>
                            http://support.apple.com/kb/ph5042
                            <br>
                            <b>Opera desde aquí:</b>
                            <br>
                            http://help.opera.com/Windows/11.50/es-ES/cookies.html
                            <br>
                            <b>Firefox desde aquí:</b>
                            <br>
                            http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we
                            <br>
                            <b>Google Chrome desde aquí:</b>
                            <br>
                            http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647
                        </p>
                        <br>
                        <p><b>Importante:</b> Por favor, lea atentamente la sección de ayuda de su navegador para conocer más acerca de cómo activar el “modo privado”. Podrá seguir visitando nuestra web aunque su navegador esté en “modo privado”, si bien, su navegación por nuestra web puede no ser óptima y algunas utilidades pueden no funcionar correctamente.</p>
                        <br>
                        <p><b>ALACER MAS</b>, SL puede modificar esta Política de Cookies en función de exigencias reglamentarias, legislativas o con la finalidad de adaptar dicha política a las instrucciones dictadas por la normativa vigente.</p>
                        <br>
                        <p>Por ello, le recomendamos revisar esta política cada vez que acceda a nuestro sitio web con el objetivo de estar adecuadamente informado sobre cómo y para qué usamos las cookies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection