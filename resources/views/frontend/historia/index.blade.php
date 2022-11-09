@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/historia-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>@lang("Historia")</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap history detail-page">
        <div class="heading">
            <figure>
                <img src='{{ asset("/frontend/assets/images/icona.png") }}' alt="Alacer Mas">
            </figure>
            <h2>@lang("Alacer Mas: un pasado, un presente y un futuro...")</h2>
        </div>
        <div class="container spacee">
            <div class="timeline" id="timeline">
                <div class="fill" style="height: 20px;"></div>
            </div>
            
            @foreach ($histories as $historia)
                @if ( $historia->any == 1978)
                    <div class="row left first">
                @elseif ( ($historia->id % 2) == 0 )
                    <div class="row left">
                @elseif ( ($historia->id % 2) != 0 )
                    <div class="row right">
                @endif
                    @if ( ($historia->id % 2) == 0 )
                        <div class="col-lg-5">
                    @elseif ( ($historia->id % 2) != 0 )
                        <div class="col-lg-5 offset-lg-7">
                    @endif
                            <div class="h-box">
                                <figure>
                                    <img src='{{ asset("/storage/$historia->imatge1") }}' alt="Alacer Mas Historia" class="radius-img">
                                </figure>
                                <br>
                                <h2>{{ $historia->any }}</h2>
                                <h5>{{ translatePHP($historia, 'titol') }}</h5>
                                <div class="descripcion-historia">{!! translatePHP($historia, 'descripcio') !!}</div>
                                <br>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>
@endsection