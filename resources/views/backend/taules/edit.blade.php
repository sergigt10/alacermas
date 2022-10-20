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
                        <h2>Modificar taula</h2>
                        <p> * Camps obligatoris </p>
                        <br>
                        <form class="forms-sample" method="post" action="{{ route('backend.taules.update', ['taula' => $taula->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @error('producte_id')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('files_th_excel')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('excel')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail3">Producte *:</label>
                                <select id="producte_id" name="producte_id" class="form-control js-example-basic-single w-100">
                                    @foreach ($productes as $producte)
                                        <option 
                                            value="{{ $producte->id }}"
                                            {{ $taula->producte_id == $producte->id ? 'selected' : '' }}
                                        >
                                            {{ $producte->nom_cat }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Files excel amb títols (separat per coma i començant per 1) Ex: 1,5,70 *:</label>
                                <input name="files_th_excel" type="text" class="form-control @error('files_th_excel') is-invalid @enderror" id="exampleInputEmail3" placeholder="Ex: 1,5,70" value="{{ $taula->files_th_excel }}">
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar excel en format: xlsx o xls</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Excel del producte:</label>
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <i class="mdi mdi-file-excel menu-icon"></i> {{ $taula->excel }}
                                                        </div>
                                                        <input name="excel" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="excel" type="text" class="form-control @error('excel') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Excel producte" value="{{ old('excel') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar taula excel</button>
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