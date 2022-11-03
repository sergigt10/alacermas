<div class="col-lg-3">
    @if((new \Jenssegers\Agent\Agent())->isDesktop())
        <ul class="categorias mt-3">
            <span class="categorias-parent"><h1>{{ $categoriaParent }}</h1></span>
            {{-- <i class="fa-sharp fa-solid fa-angle-down"></i> --}}
            @foreach ($subCategories as $categoria)
                <li class="categoria">
                    <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">{{ $categoria->nom_esp }}</a>
                </li>
            @endforeach
        </ul>
    @endif

    @if((new \Jenssegers\Agent\Agent())->isMobile())
        <div class="acc2">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-One">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-One" aria-expanded="false" aria-controls="collapse-One">
                            {{ $categoriaParent }}
                        </button>
                    </h2>
                    <div id="collapse-One" class="accordion-collapse collapse" aria-labelledby="heading-One" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                @foreach ($subCategories as $categoria)
                                    <li class="categoria">
                                        <a href="{{ route('frontend.productes.index', ['categoria' => $categoria->slug]) }}">{{ $categoria->nom_esp }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>