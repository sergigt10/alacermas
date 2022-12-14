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
                            <h2>Inserir nou producte</h2>
                            <p> * Camps obligatoris </p>
                            <br>
                            <form class="forms-sample" method="POST" action="{{ route('backend.productes.store') }}" enctype="multipart/form-data" novalidate>
                                @csrf
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
                                @error('descripcio_esp')
                                    <div class='alert alert-danger' role='alert'>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('descripcio_cat')
                                    <div class='alert alert-danger' role='alert'>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('descripcio_eng')
                                    <div class='alert alert-danger' role='alert'>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('descripcio_fra')
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
                                    <input name="nom_esp" type="text" class="form-control @error('nom_esp') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom ESP" value="{{ old('nom_esp') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nom CAT *:</label>
                                    <input name="nom_cat" type="text" class="form-control @error('nom_cat') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom CAT" value="{{ old('nom_cat') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nom ENG *:</label>
                                    <input name="nom_eng" type="text" class="form-control @error('nom_eng') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom ENG" value="{{ old('nom_eng') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nom FRA *:</label>
                                    <input name="nom_fra" type="text" class="form-control @error('nom_fra') is-invalid @enderror" id="exampleInputEmail3" placeholder="Nom FRA" value="{{ old('nom_fra') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Descripci?? ESP *:</label>
                                    <input id="descripcio_esp" type="hidden" name="descripcio_esp" value="{{ old('descripcio_esp') }}">
                                    <trix-editor 
                                        class="form-control @error('descripcio_esp') is-invalid @enderror "
                                        input="descripcio_esp">
                                    </trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Descripci?? CAT *:</label>
                                    <input id="descripcio_cat" type="hidden" name="descripcio_cat" value="{{ old('descripcio_cat') }}">
                                    <trix-editor 
                                        class="form-control @error('descripcio_cat') is-invalid @enderror "
                                        input="descripcio_cat">
                                    </trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Descripci?? ENG *:</label>
                                    <input id="descripcio_eng" type="hidden" name="descripcio_eng" value="{{ old('descripcio_eng') }}">
                                    <trix-editor 
                                        class="form-control @error('descripcio_eng') is-invalid @enderror "
                                        input="descripcio_eng">
                                    </trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Descripci?? FRA *:</label>
                                    <input id="descripcio_fra" type="hidden" name="descripcio_fra" value="{{ old('descripcio_fra') }}">
                                    <trix-editor 
                                        class="form-control @error('descripcio_fra') is-invalid @enderror "
                                        input="descripcio_fra">
                                    </trix-editor>
                                </div>
                                <!-- Arbre de categories -->
                                <div class="accordion accordion-solid-header" id="accordion" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-2">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                    <b>Seleccionar una categoria *:</b>
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion">
                                            <div class="card-body">
                                                <x-categories :categories="$treeCategories" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Actiu:</label>
                                    <select id="actiu" name="actiu" class="form-control js-example-basic-single w-100">
                                        <option value="1"
                                            {{ old('actiu') == "Si" ? 'selected' : '' }}
                                        >
                                            Si
                                        </option>
                                        <option value="0"
                                            {{ old('actiu') == "No" ? 'selected' : '' }}
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
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imatge 1 producte</label>
                                                            <input name="imatge1" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge1" type="text" class="form-control @error('imatge1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 1 producte" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 1</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row grid-margin">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 style="color:red">Pujar imatges en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imatge 2 producte (opcional)</label>
                                                            <input name="imatge2" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge2" type="text" class="form-control @error('imatge2') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 2 producte" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 2</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row grid-margin">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 style="color:red">Pujar PDF en format: pdf</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>PDF producte (opcional)</label>
                                                            <input name="pdf" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="pdf" type="text" class="form-control @error('pdf') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="PDF producte" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Cercar PDF</button>
                                                                </span>
                                                            </div>
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