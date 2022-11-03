@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css" integrity="sha512-494Ejp/5WyoRNfh+nPLhSCQPHhcsbA5PoIGv2/FuEo+QLfW+L7JQGPdh8Qy2ZOmkF27pyYlALrxteMiKau1tyw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
@endsection

@section('content')

    <div class="main-panel">        
        <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Modificar categoria</h2>
                        <p> * Camps obligatoris </p>
                        <br>
                        <form class="forms-sample" method="post" action="{{ route('backend.categories.update', ['categoria' => $categoria->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @error('nom_esp')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('nom_cat')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('nom_eng')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('nom_fra')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail3">Nom ESP *:</label>
                                <input name="nom_esp" type="text" class="form-control @error('nom_esp') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom ESP" value="{{ $categoria->nom_esp }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Nom CAT *:</label>
                                <input name="nom_cat" type="text" class="form-control @error('nom_cat') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom CAT" value="{{ $categoria->nom_cat }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Nom ENG *:</label>
                                <input name="nom_eng" type="text" class="form-control @error('nom_eng') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom ENG" value="{{ $categoria->nom_eng }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Nom FRA *:</label>
                                <input name="nom_fra" type="text" class="form-control @error('nom_fra') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom FRA" value="{{ $categoria->nom_fra }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Categoria arrel:</label>
                                <select id="parent_id" name="parent_id" class="form-control js-example-basic-single w-100">
                                    @foreach ($categoriesAll as $categoriaAll)
                                        @if (!str_contains(\App\Http\Controllers\CategoriaProducteController::getParentsTree($categoriaAll, $categoriaAll->nom_cat), $categoria->nom_cat))
                                            <option 
                                                value="{{ $categoriaAll->id }}"
                                                {{ $categoriaAll->id == $categoria->parent_id ? 'selected' : '' }}
                                            >
                                                {{ \App\Http\Controllers\CategoriaProducteController::getParentsTree($categoriaAll, $categoriaAll->nom_cat) }}
                                            </option>
                                        @endif
                                    @endforeach
                                    @if ($categoria->parent_id === NULL)
                                        <option 
                                            value=" "
                                            {{ $categoria->parent_id === NULL ? 'selected' : '' }}
                                        >
                                            - Categoria principal -
                                        </option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Actiu:</label>
                                <select id="actiu" name="actiu" class="form-control js-example-basic-single w-100">
                                    <option value="1"
                                        {{ $categoria->actiu == "1" ? 'selected' : '' }}
                                    >
                                        Si
                                    </option>
                                    <option value="0"
                                        {{ $categoria->actiu == "0" ? 'selected' : '' }}
                                    >
                                        No
                                    </option>
                                </select>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatges en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge categoria</label>
                                                        <input name="imatge1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge1" type="text" class="form-control @error('imatge1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge categoria" value="{{ old('imatge1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar categoria</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$categoria->imatge1") }}' alt="Alacermas" with=200 height=92>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="funcioBoto" class="btn btn-primary mr-2" value="Guardar">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js" integrity="sha512-wEfICgx3CX6pCmTy6go+PmYVKDdi4KHhKKz5Xx/boKOZOtG7+rrm2fP7RUR2o4m/EbPdwbKWnP05dvj4uzoclA==" crossorigin="anonymous" defer></script>
    <script src="{{ asset('backend/js/file-upload.js') }}"></script>
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/js/select2.js') }}"></script>
@endsection

@endsection