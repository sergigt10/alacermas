<div class="update-buscador d-flex-all justify-content-between">
    <form id="filtre" action="{{ route('frontend.productes.search') }}" method="POST">
        @csrf
        <input type="text" name="buscador" placeholder="@lang('Buscador')" required>
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>