@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <!-- Missatges enviats desde el controller -->
                    @if(session('estat'))
                        <div class="alert alert-success" role="alert">
                            {{ session('estat') }}
                        </div>
                    @endif
                    <br>
                    <h2>Categories</h2>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Categoria arrel</th>
                                            <th>Actiu</th>
                                            <th data-orderable="false">Editar</th>
                                            <th data-orderable="false">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $categoria)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('backend.categories.edit', ['categoria' => $categoria->id]) }}" style="color: black;">
                                                        {{ $categoria->nom_cat }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('backend.categories.edit', ['categoria' => $categoria->id]) }}" style="color: black;">
                                                        @if( $categoria->parent_id == NULL) 
                                                            Categoria principal
                                                        @else
                                                            {{ \App\Http\Controllers\CategoriaProducteController::getParentsTree($categoria, $categoria->nom_cat, 'Backend') }}
                                                        @endif
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('backend.categories.edit', ['categoria' => $categoria->id]) }}" style="color: black;">
                                                        @if ( $categoria->actiu == 1)
                                                            Si
                                                        @else
                                                            No
                                                        @endif
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('backend.categories.edit', ['categoria' => $categoria->id]) }}" style="color: black;">
                                                        <i class="mdi mdi-pencil menu-icon"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if( $categoria->parent_id == NULL) 
                                                        ----
                                                    @else
                                                        <a href="" style="color: black;" data-toggle="modal" data-target="#exampleModalCenter{{$categoria->id}}">
                                                            <i class="mdi mdi-close-circle menu-icon"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="exampleModalCenter{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Eliminar?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    <div class="modal-body">
                                                        Segur que vols esborrar: {{ $categoria->nom_cat }}
                                                        <br><br>
                                                        <b><i>Si la categoria té subcategories, aniran a la categoria pare. Si també té productes associats, formaran part de la categoria pare.<i></b>
                                                    </div>
                                                        <div class="modal-footer">
                                                            <form class="pull-right" action="{{ route('backend.categories.destroy', ['categoria' => $categoria->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" value="Esborrar" class="btn btn-danger">
                                                            </form>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel·lar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       

@endsection

@section('scripts')
    <script src="{{ asset('backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('backend/js/data-table.js') }}"></script>
@endsection