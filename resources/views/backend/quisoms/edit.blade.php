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
                        <h2>Modificar qui som</h2>
                        <p> * Camps obligatoris </p>
                        <br>
                        <form class="forms-sample" method="post" action="{{ route('backend.quisoms.update', ['quisom' => $quisom->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @error('descripcio_esp_pres')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_pres')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_pres')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_pres')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_esp_obje')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_obje')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_obje')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_obje')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_esp_video')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat_video')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_eng_video')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_fra_video')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_pres1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_pres2')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge_obje1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció ESP presentació *:</label>
                                <input id="descripcio_esp_pres" type="hidden" name="descripcio_esp_pres" value="{{ $quisom->descripcio_esp_pres }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_pres') is-invalid @enderror "
                                    input="descripcio_esp_pres">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció CAT presentació *:</label>
                                <input id="descripcio_cat_pres" type="hidden" name="descripcio_cat_pres" value="{{ $quisom->descripcio_cat_pres }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_pres') is-invalid @enderror "
                                    input="descripcio_cat_pres">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció ENG presentació *:</label>
                                <input id="descripcio_eng_pres" type="hidden" name="descripcio_eng_pres" value="{{ $quisom->descripcio_eng_pres }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_pres') is-invalid @enderror "
                                    input="descripcio_eng_pres">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció FRA presentació *:</label>
                                <input id="descripcio_fra_pres" type="hidden" name="descripcio_fra_pres" value="{{ $quisom->descripcio_fra_pres }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_pres') is-invalid @enderror "
                                    input="descripcio_fra_pres">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció ESP missió i objectius *:</label>
                                <input id="descripcio_esp_obje" type="hidden" name="descripcio_esp_obje" value="{{ $quisom->descripcio_esp_obje }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_obje') is-invalid @enderror "
                                    input="descripcio_esp_obje">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció CAT missió i objectius *:</label>
                                <input id="descripcio_cat_obje" type="hidden" name="descripcio_cat_obje" value="{{ $quisom->descripcio_cat_obje }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_obje') is-invalid @enderror "
                                    input="descripcio_cat_obje">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció ENG missió i objectius *:</label>
                                <input id="descripcio_eng_obje" type="hidden" name="descripcio_eng_obje" value="{{ $quisom->descripcio_eng_obje }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_obje') is-invalid @enderror "
                                    input="descripcio_eng_obje">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció FRA missió i objectius *:</label>
                                <input id="descripcio_fra_obje" type="hidden" name="descripcio_fra_obje" value="{{ $quisom->descripcio_fra_obje }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_obje') is-invalid @enderror "
                                    input="descripcio_fra_obje">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció ESP video *:</label>
                                <input id="descripcio_esp_video" type="hidden" name="descripcio_esp_video" value="{{ $quisom->descripcio_esp_video }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_esp_video') is-invalid @enderror "
                                    input="descripcio_esp_video">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció CAT video *:</label>
                                <input id="descripcio_cat_video" type="hidden" name="descripcio_cat_video" value="{{ $quisom->descripcio_cat_video }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_cat_video') is-invalid @enderror "
                                    input="descripcio_cat_video">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció ENG video *:</label>
                                <input id="descripcio_eng_video" type="hidden" name="descripcio_eng_video" value="{{ $quisom->descripcio_eng_video }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_eng_video') is-invalid @enderror "
                                    input="descripcio_eng_video">
                                </trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripció FRA video *:</label>
                                <input id="descripcio_fra_video" type="hidden" name="descripcio_fra_video" value="{{ $quisom->descripcio_fra_video }}">
                                <trix-editor 
                                    class="form-control @error('descripcio_fra_video') is-invalid @enderror "
                                    input="descripcio_fra_video">
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
                                                        <label>Imatge presentació 1</label>
                                                        <input name="imatge_pres1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_pres1" type="text" class="form-control @error('imatge_pres1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge" value="{{ old('imatge_pres1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge presentació 1</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$quisom->imatge_pres1") }}' alt="Alacermas" with=200 height=92>
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
                                                        <label>Imatge presentació 2</label>
                                                        <input name="imatge_pres2" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_pres2" type="text" class="form-control @error('imatge_pres2') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge" value="{{ old('imatge_pres2') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge presentació 2</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$quisom->imatge_pres2") }}' alt="Alacermas" with=200 height=92>
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
                                                        <label>Imatge missió i objectius 1</label>
                                                        <input name="imatge_obje1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge_obje1" type="text" class="form-control @error('imatge_obje1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge" value="{{ old('imatge_obje1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge missió i objectius 1</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$quisom->imatge_obje1") }}' alt="Alacermas" with=200 height=92>
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