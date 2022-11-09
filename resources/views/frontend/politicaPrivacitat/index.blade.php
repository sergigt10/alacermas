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
            <h2>@lang("Política de privacidad")</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="data">
                        <b>ACCEPTACIÓN DEL USUARIO</b>
                        <br><br>
                        <p>Este documento (a partir de aquí llamado “POLÍTICA DE PRIVACIDAD”) tiene por objetivo regular el uso del espacio web que <b>ALACER MAS, S.L.</b> pone a disposición del (www.alacermas.com)</p>
                        <p>Los derechos de propiedad intelectual de este espacio web, su código fuente, las bases de datos y los distintos elementos que contiene son propiedad titular de <b>ALACER MAS, S.L.</b>, a quien corresponde el ejercicio exclusivo de explotación de los derechos de la propia web y, en especial, los de reproducción, distribución, comunicación pública, mantenimiento y transformación.</p>
                        <p>La utilización del espacio web para un tercero le atribuye la condición de usuario y supone la completa aceptación de este usuario de todas y cada una de las condiciones que establece esta Política de privacidad.</p>
                        <br><br>
                        <b>USO CORRECTO DEL ESPACIO WEB</b>
                        <br><br>
                        <p>El usuario se compromete a utilizar el espacio web, los contenidos y los servicios de acuerdo con la Ley, esta Política de privacidad, las buenas prácticas y el orden público. De la misma manera, el usuario se obliga a no utilizar el espacio web o los servicios que se presten a través de él con finalidades o efectos ilícitos o contrarios al contenido de esta Política de privacidad, que lesionen los intereses o derechos de terceros, o que de cualquier forma se pueda dañar, inutilizarlo deteriorar el propio espacio web o sus servicios o impedir un uso satisfactorio del espacio web a otros usuarios.</p>
                        <p>Así mismo, el usuario se compromete expresamente a no destruir, alterar, inutilizar o, de cualquier otra forma, dañar los datos, los programas o los documentos electrónicos y otros que se encuentren n el presente espacio web.</p>
                        <p>El usuario se compromete a no obstaculizar el acceso de otros usuarios al servicio mediante el consumo masivo de los recursos informáticos a través de los cuales <b>ALACER MAS, S.L.</b> presta el servicio, así como no realizar acciones que dañen, interrumpan o generen errores en los sistemas citados.</p>
                        <p>El usuario se compromete a no introducir programas, virus, macroinstrucciones, miniaplicaciones, controles de cualquier tipo o cualquier otro dispositivo lógico o secuencia de caracteres que cusen o puedan causar cualquier tipo de alteración en los sistemas informáticos de <b>ALACER MAS, S.L.</b> o de terceros o, en su caso, violar los derechos de la propiedad intelectual o industrial.</p>
                        <p>El usuario se compromete a no hacer un mal uso de las informaciones, mensajes, gráficos, dibujos, archivos de sonido y/ o imagen, fotografías, programas y, en general, cualquier clase de material accesible a través del presente espacio web o de los servicios que ofrece.</p>
                        <p><b>ALACER MAS, S.L.</b> Consiguientemente, declina igualmente toda responsabilidad derivada de los daños y perjuicios que pueda sufrir cualquier visitante de este espacio web en sus recursos tecnológicos (informáticos o telemáticos) a consecuencia de la producción de cualquiera de las circunstancias o hechos mencionados al párrafo anterior. Igualmente <b>ALACER MAS, S.L.</b> no garantiza que el espacio web y el servidor estén libres de virus y no se hace responsable de los daños causados por el acceso al web o por la imposibilidad de acceder.</p>
                        <p><b>ALACER MAS, S.L.</b>, no es responsable de la información que se puede obtener a través de enlaces a sistemas externos des de este espacio web.</p>
                        <br><br>
                        <b>PROPIEDAD INTELECTUAL E INDUSTRIAL</b>
                        <br><br>
                        <p>Este espacio web y todos sus contenidos, incluidos los textos, los documentos, las fotografías, los dibujos, las representaciones gráficas, las bases de datos, los programas informáticos, así como los logotipos, las marcas, los nombres comerciales y otros signos distintivos son propiedad de <b>ALACER MAS, S.L.</b> o de terceros que le han autorizado para su uso.</p>
                        <p>Todos los derechos están reservados.</p>
                        <br><br>
                        <b>RÉGIMEN DE RESPONSABILIDAD </b>
                        <br><br>
                        <p>Responsabilidad de <b>ALACER MAS, S.L.</b> para la utilización del web </p>
                        <p>El usuario es el único responsable de las infracciones en que pueda incurrir y de los perjuicios que pueda causar o causarse para la utilización del presente espacio web por su parte <b>ALACER MAS, S.L.</b> esta exonerada de cualquier responsabilidad que se pudiese derivar por las acciones del usuario.</p>
                        <p>El usuario será el único responsable para cualquier reclamación o acción legal, judicial o extrajudicial iniciada por terceras personas contra <b>ALACER MAS, S.L.</b> basada en la utilización del espacio web por el usuario. En su caso, el usuario asumirá todos los gastos, los costes y las indemnizaciones que se reclamen a <b>ALACER MAS, S.L.</b> con motivo de reclamaciones o de acciones legales que le sean atribuidas.</p> 
                        <p>Responsabilidad de <b>ALACER MAS, S.L.</b> por el funcionamiento del web </p>
                        <p><b>ALACER MAS, S.L.</b> excluye cualquier responsabilidad que se pudiese derivar por transferencias, omisiones, interrupciones, intromisiones indeseables, deficiencias de telecomunicaciones, virus informáticos, averías telefónicas o desconexiones en el funcionamiento operativo del sistema electrónico, motivados por causas alienas a <b>ALACER MAS, S.L.</b></p>
                        <p>Responsabilidad de <b>ALACER MAS, S.L.</b> por enlaces des del web</p>
                        <p><b>ALACER MAS, S.L.</b> declina toda responsabilidad respecto de la información (contenidos) o ricos (perjuicios técnicos, morales o económicos) que haya fuera del espacio web y al que se pueda acceder por link desde ésta; ya que la función de los enlaces que aparecen es únicamente de informar sobre un tema concreto.</p> 
                        <br><br>
                        <b>COMPROMISO DE PROTECCIÓN DE DATOS Y DE COMPLIMIENTO DE LA LSSICE</b>
                        <br><br>
                        <p>En cumplimiento del RGPD (Reglamento General de Protección de datos) y la Ley Orgánica Española 3/2018, <b>ALACER MAS, S.L.</b> informa a los usuarios que los datos de carácter personal que proporcionen al emplear los formularios o requerimientos de contrato se recogerán en ficheros responsabilidad de <b>ALACER MAS, S.L.</b> y serán tratados con la finalidad de poder prestar e informar sobre los servicios o sobre los productos que <b>ALACER MAS, S.L.</b> ofrece. El hecho de rellenar un formulario de este espacio web implica que el usuario reconoce que la información y los datos personales que nos indica son suyos, exactos y ciertos.</p>
                        <b>1. ¿Quién es el responsable del tratamiento de sus datos personales?</b>
                        <p>Responsable del tratamiento: ALACER MAS, S.L. Rda. Agricultura, 15, P.I. Ronda - 08503 Gurb (Barcelona) Correo electrónico: lopd@alacermas.com</p>
                        <b>2. ¿Cuáles son las finalidades para continuar tratando sus datos personales?</b>
                        <p>Tratamos los datos personales de nuestros contactos, clientes y proveedores con la finalidad de gestionar la relación comercial con nuestra organización y, en especial, los aspectos contractuales, el envío de información de nuestra organización y del sector, de la organización de actividades, campañas o eventos y el envío de comunicaciones informativas y comerciales (incluyendo la via electrónica).</p>
                        <b>3. ¿Cuánto tiempo conservaremos sus datos personales?</b>
                        <p>Los datos personales se conservarán durante el plazo de seis (6) años, de conformidad con la normativa contable vigente y, si procede, durante diez (10) años según la normativa de prevención de blanqueo de capitales.</p>
                        <p>En cualquier caso, ALACER MAS, S.L. conservará sus datos personales mientras sean necesarios para la prestación contractual de nuestra relación, a menos que nos solicite su supresión. Asimismo, las conservará durante el periodo de tiempo necesario para dar cumplimiento a las obligaciones legales que en cada caso correspondan de acuerdo con la tipología de los datos.</p>
                        <b>4. ¿Cuál es la legitimación para el tratamiento de sus datos personales?</b>
                        <p>La base legítima para el tratamiento de datos personales es el interés mutuo y el consentimiento del usuario.</p>
                        <b>5. ¿A qué destinatarios se comunicarán sus datos personales?</b>
                        <p>Los datos únicamente podrán comunicarse a organizaciones terceras vinculadas con ALACER MAS, S.L. en el ámbito de la gestión de sus productos y/o servicios para las mismas finalidades referidas anteriormente, así como a las Administraciones Públicas competentes, cuando así lo exija la normativa vigente.</p>
                        <p>Los empleados de ALACER MAS, S.L. que disponen de derechos de acceso autorizado de acuerdo con la estructura de seguridad interna de ALACER MAS, S.L. pueden acceder a sus datos personales con los objetivos y finalidades descritas en esta Política de Privacidad. Todos los empleados de ALACER MAS, S.L. han sido formados e informados de sus responsabilidades al respecto y firman el acuerdo de confidencialidad correspondiente. Igualmente, pueden acceder a sus datos, organizaciones terceras cuya intervención sea requerida y/o necesaria para la gestión adecuada de la prestación del servicio.</p>
                        <p>ALACER MAS, S.L. ha establecido contratos o acuerdos contractuales y medidas de seguridad con terceros, para garantizar el adecuado nivel de seguridad y de protección de los datos personales a lo largo de la cadena relacionada.</p>
                        <b>6. ¿Cuáles son sus derechos en relación con sus datos personales?</b>
                        <p>Puede solicitar el acceso, rectificación, supresión, limitación al tratamiento, portabilidad y oposición al tratamiento de sus datos personales en cualquier momento.Podrá revocar el consentimiento al envío de comunicaciones comerciales y ejercer los derechos referidos anteriormente, mediante el envío de un correo electrónico a lopd@alacermas.com acompañado de la acreditación documental de su identidad. Con la excepción que ya nos lo haya indicado con anterioridad mediante la opción de darse de baja que se encuentra al pie de los envíos electrónicos, en cuyo caso, ya disponemos de tal información.</p>
                        <p>Si no obtiene una respuesta satisfactoria y desea formular una reclamación u obtener más información al respecto de cualquier de esos derechos, puede dirigirse a la Agencia Española de Protección de Datos (www.agpd.es).</p>
                        <b>7. ¿Cuál es la relación de información personal almacenada?</b>
                        <p>Se guardan los datos básicos de identificación y relación para el envío de propuestas, información comercial, para crear facturas, como por ejemplo nombre, domicilio de envío, NIF/CIF, número de cuenta bancaria, si el cliente desea domiciliación bancaria.</p>
                        <b>8. ¿Cuál es la Política de almacenamiento de los datos /disponibilidad /backups y su ubicación?</b>
                        <p>No se elimina información, a menos que sea solicitada supresión por parte del usuario y que esta supresión proceda (ver punto 3). Siempre está disponible, aunque puede estar bloqueada para envíos informativos de marketing / comercial, si ejercitados los derechos de supresión, limitación al tratamiento u oposición por parte del usuario. Se realizan copias de seguridad de los servidores que contienen datos, debidamente controladas y custodiadas.</p>
                        <b>9. ¿Cuál es la Política de privacidad y seguridad de la información y su acceso?</b>
                        <p>El acceso a la base de datos está protegido mediante usuario y contraseña. En el caso de acceso remoto, este se realiza mediante conexión VPN y protocolo SSL</p>
                        <b>10. ¿Cuál es la Política de respuesta ante incidentes de seguridad y análisis de impacto?</b>
                        <p>ALACER MAS, S.L. ha adoptado medidas de protección técnica y organizativa apropiadas y estas medidas se han aplicado a los datos personales afectados por la potencial violación de la seguridad de los datos personales. No hay acceso a datos de los clientes / usuarios para personas que no estén autorizadas a acceder a ellos.</p>
                        <p>ALACER MAS, S.L. ha llevado a cabo y mantiene actualizado un Análisis de riesgos de la vulnerabilidad de los datos personales y su impacto sobre la seguridad de la intimidad de los clientes/usuarios.</p>
                        <b>11. ¿Cuál es la Política de borrado de información ante bajas de servicio?</b>
                        <p>ALACER MAS, S.L. desactiva las cuentas de los clientes / usuarios que deciden darse de baja y que hayan ejercido su derecho a la supresión. En este caso, los datos del cliente / usuario quedarán bloqueados y mantenidos por el tiempo requerido por normativa, exclusivamente para dar cuenta de las obligaciones legales que justifiquen la relación pasada entre las partes.</p>
                        <b>12. ¿Quién es nuestro Responsable de Seguridad en materia de Protección de datos?  </b>
                        <p>ALACER MAS, S.L. no tiene obligatoriedad legal de designar un DPD (Delegado de Protección de datos), de acuerdo a la legislación vigente. 
                        Independientemente de ello, ALACER MAS, S.L. ha designado a una persona Responsable de Seguridad de los datos, a fin de velar por el correcto funcionamiento de esta Política de Privacidad y de asegurar que se preservan sus requisitos en relación a los datos personales de usuarios internos y externos a la organización. Puede contactar con nuestro Responsable de Seguridad de datos en lopd@alacermas.com
                        En caso de que ALACER MAS, S.L. identifique una violación de seguridad de datos personales, los usuarios serán notificados a la mayor brevedad posible en relación a la misma y, en caso de que fuese de riesgo importante, se notificaría igualmente a la autoridad competente.</p>
                        <br><br>
                        <p>El usuario registrado conserva en todo momento la posibilidad de ejercitar sus derechos de acceso, rectificación, oposición, supresión, tratamiento limitado, portabilidad u oposición al tratamiento de sus datos. Así mismo, y de conformidad con la Ley 34/ 2002, de 1 de julio, de servicios de la sociedad de la información y comercio electrónico, puede revocar en cualquier momento el consentimiento prestado a la recepción de comunicaciones comerciales. En caso de duda, así como por ejercitar los derechos mencionados, puede dirigirse a <b>ALACER MAS, S.L.</b> mediante correo electrónico lopd@alacermas.com o correo postal a Dirección: <b>ALACER MAS, S.L.</b> en Rda. Agricultura, 15, P.I. Ronda - 08503 Gurb (Barcelona)</p>
                        <br><br>
                        <b>LEGISLACIÓN APLICABLE Y COMPETENCIA JUDICIAL</b>
                        <br><br>
                        <p>Cualquier controversia surgida en la interpretación o la ejecución de esta Política de privacidad se interpretará a partir de la legislación española. Así mismo, <b>ALACER MAS, S.L.</b> a través de su representación legal i el usuario, renuncian a cualquier otra jurisdicción y se someten a la de los juzgados y tribunales del domicilio del usuario para cualquier controversia que pudiese suceder. El caso que le usuario tenga su domicilio fuera de España <b>ALACER MAS, S.L.</b> y el usuario se someten a los juzgados y tribunales de la ciudad de Barcelona.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection