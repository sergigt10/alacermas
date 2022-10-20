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
                        <h2>Modificar serveis</h2>
                        <p> * Camps obligatoris </p>
                        <br>
                        <form class="forms-sample" method="post" action="{{ route('backend.serveis.update', ['servei' => $servei->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @error('descripcio_esp_1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_esp_2')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_2')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_2')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_2')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_esp_3')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_3')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_3')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_3')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_esp_4')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_4')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_4')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_4')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_esp_5')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_5')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_5')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_5')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_desc_1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_desc_2')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_desc_3')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_desc_4')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_desc_5')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_2')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_3')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_4')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_5')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_6')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_7')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_8')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 1 ESP *:</label>
                                <input id="descripcio_esp_1" type="hidden" name="descripcio_esp_1" value="{{ $servei->descripcio_esp_1 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_1') is-invalid @enderror "
                                    input="descripcio_esp_1">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 1 CAT *:</label>
                                <input id="descripcio_cat_1" type="hidden" name="descripcio_cat_1" value="{{ $servei->descripcio_cat_1 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_1') is-invalid @enderror "
                                    input="descripcio_cat_1">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 1 ENG *:</label>
                                <input id="descripcio_eng_1" type="hidden" name="descripcio_eng_1" value="{{ $servei->descripcio_eng_1 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_1') is-invalid @enderror "
                                    input="descripcio_eng_1">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 1 FRA *:</label>
                                <input id="descripcio_fra_1" type="hidden" name="descripcio_fra_1" value="{{ $servei->descripcio_fra_1 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_1') is-invalid @enderror "
                                    input="descripcio_fra_1">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 2 ESP *:</label>
                                <input id="descripcio_esp_2" type="hidden" name="descripcio_esp_2" value="{{ $servei->descripcio_esp_2 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_2') is-invalid @enderror "
                                    input="descripcio_esp_2">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 2 CAT *:</label>
                                <input id="descripcio_cat_2" type="hidden" name="descripcio_cat_2" value="{{ $servei->descripcio_cat_2 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_2') is-invalid @enderror "
                                    input="descripcio_cat_2">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 2 ENG *:</label>
                                <input id="descripcio_eng_2" type="hidden" name="descripcio_eng_2" value="{{ $servei->descripcio_eng_2 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_2') is-invalid @enderror "
                                    input="descripcio_eng_2">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 2 FRA *:</label>
                                <input id="descripcio_fra_2" type="hidden" name="descripcio_fra_2" value="{{ $servei->descripcio_fra_2 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_2') is-invalid @enderror "
                                    input="descripcio_fra_2">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 3 ESP *:</label>
                                <input id="descripcio_esp_3" type="hidden" name="descripcio_esp_3" value="{{ $servei->descripcio_esp_3 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_3') is-invalid @enderror "
                                    input="descripcio_esp_3">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 3 CAT *:</label>
                                <input id="descripcio_cat_3" type="hidden" name="descripcio_cat_3" value="{{ $servei->descripcio_cat_3 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_3') is-invalid @enderror "
                                    input="descripcio_cat_3">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 3 ENG *:</label>
                                <input id="descripcio_eng_3" type="hidden" name="descripcio_eng_3" value="{{ $servei->descripcio_eng_3 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_3') is-invalid @enderror "
                                    input="descripcio_eng_3">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 3 FRA *:</label>
                                <input id="descripcio_fra_3" type="hidden" name="descripcio_fra_3" value="{{ $servei->descripcio_fra_3 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_3') is-invalid @enderror "
                                    input="descripcio_fra_3">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 4 ESP *:</label>
                                <input id="descripcio_esp_4" type="hidden" name="descripcio_esp_4" value="{{ $servei->descripcio_esp_4 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_4') is-invalid @enderror "
                                    input="descripcio_esp_4">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 4 CAT *:</label>
                                <input id="descripcio_cat_4" type="hidden" name="descripcio_cat_4" value="{{ $servei->descripcio_cat_4 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_4') is-invalid @enderror "
                                    input="descripcio_cat_4">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 4 ENG *:</label>
                                <input id="descripcio_eng_4" type="hidden" name="descripcio_eng_4" value="{{ $servei->descripcio_eng_4 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_4') is-invalid @enderror "
                                    input="descripcio_eng_4">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 4 FRA *:</label>
                                <input id="descripcio_fra_4" type="hidden" name="descripcio_fra_4" value="{{ $servei->descripcio_fra_4 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_4') is-invalid @enderror "
                                    input="descripcio_fra_4">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 5 ESP *:</label>
                                <input id="descripcio_esp_5" type="hidden" name="descripcio_esp_5" value="{{ $servei->descripcio_esp_5 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_5') is-invalid @enderror "
                                    input="descripcio_esp_5">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 5 CAT *:</label>
                                <input id="descripcio_cat_5" type="hidden" name="descripcio_cat_5" value="{{ $servei->descripcio_cat_5 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_5') is-invalid @enderror "
                                    input="descripcio_cat_5">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 5 ENG *:</label>
                                <input id="descripcio_eng_5" type="hidden" name="descripcio_eng_5" value="{{ $servei->descripcio_eng_5 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_5') is-invalid @enderror "
                                    input="descripcio_eng_5">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció 5 FRA *:</label>
                                <input id="descripcio_fra_5" type="hidden" name="descripcio_fra_5" value="{{ $servei->descripcio_fra_5 }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_5') is-invalid @enderror "
                                    input="descripcio_fra_5">
                                </trix-editor>
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
                                                        <label>Imatge descripció 1</label>
                                                        <input name="imatge_desc_1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_desc_1" type="text" class="form-control @error('imatge_desc_1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge descripció 1" value="{{ old('imatge_desc_1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge descripció 1</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_desc_1") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge descripció 2</label>
                                                        <input name="imatge_desc_2" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_desc_2" type="text" class="form-control @error('imatge_desc_2') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge descripció 2" value="{{ old('imatge_desc_2') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge descripció 2</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_desc_2") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge descripció 3</label>
                                                        <input name="imatge_desc_3" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_desc_3" type="text" class="form-control @error('imatge_desc_3') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge descripció 3" value="{{ old('imatge_desc_3') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge descripció 3</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_desc_3") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge descripció 4</label>
                                                        <input name="imatge_desc_4" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_desc_4" type="text" class="form-control @error('imatge_desc_4') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge descripció 4" value="{{ old('imatge_desc_4') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge descripció 4</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_desc_4") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge descripció 5</label>
                                                        <input name="imatge_desc_5" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_desc_5" type="text" class="form-control @error('imatge_desc_5') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge descripció 5" value="{{ old('imatge_desc_5') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge descripció 5</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_desc_5") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 1</label>
                                                        <input name="imatge_1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_1" type="text" class="form-control @error('imatge_1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 1" value="{{ old('imatge_1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 1</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_1") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 2</label>
                                                        <input name="imatge_2" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_2" type="text" class="form-control @error('imatge_2') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 2" value="{{ old('imatge_2') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 2</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_2") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 3</label>
                                                        <input name="imatge_3" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_3" type="text" class="form-control @error('imatge_3') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 3" value="{{ old('imatge_3') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 3</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_3") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 4</label>
                                                        <input name="imatge_4" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_4" type="text" class="form-control @error('imatge_4') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 4" value="{{ old('imatge_4') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 4</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_4") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 5</label>
                                                        <input name="imatge_5" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_5" type="text" class="form-control @error('imatge_5') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 5" value="{{ old('imatge_5') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 5</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_5") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 6</label>
                                                        <input name="imatge_6" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_6" type="text" class="form-control @error('imatge_6') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 6" value="{{ old('imatge_6') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 6</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_6") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 7</label>
                                                        <input name="imatge_7" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_7" type="text" class="form-control @error('imatge_7') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 7" value="{{ old('imatge_7') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 7</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_7") }}' alt="Alacermas" with=200 height=92>
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
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 8</label>
                                                        <input name="imatge_8" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_8" type="text" class="form-control @error('imatge_8') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 8" value="{{ old('imatge_8') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 8</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$servei->imatge_8") }}' alt="Alacermas" with=200 height=92>
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