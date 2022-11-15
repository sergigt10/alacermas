@php $categoriaRoot = \App\Http\Controllers\CategoriaProducteController::getParentRoot($categoriaActual)  @endphp
@if ( $categoriaRoot === 'acero-inoxidable' )
    <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/acero-inoxidable.jpg') }});"></div>
@elseif ( $categoriaRoot === 'normalizados-inoxidable' )
    <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/normalizados.jpg') }});"></div>
@elseif ( $categoriaRoot === 'suministros-industriales' )
    <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/subministros-industriales.jpg') }});"></div>
@elseif ( $categoriaRoot === 'aluminio' )
    <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/aliminio2.jpg') }});"></div>
@else
    <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/servicios-alacermas.jpg') }});"></div>
@endif