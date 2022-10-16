@foreach ($categories as $categoria)
    <div class="{{ $categoria->isChild() ? 'ml-5' : null }}">
        <x-categoria :categoria="$categoria" />
    </div>
@endforeach