@foreach ($categories as $categoria)
    <div class="{{ $categoria->isChild() ? 'ml-5' : null }}">
        <x-categoriaEdit :categoria="$categoria" :producte="$producte" />
    </div>
@endforeach