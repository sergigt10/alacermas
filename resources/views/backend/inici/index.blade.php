@extends('backend.layouts.app')

@section('content')
    <div class="main-panel inici-backend">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card border-radius-2 bg-dark">
                                    <a href="{{ url('backend/quisoms/1/edit') }}">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                                <div class="icon-rounded-inverse-success icon-rounded-lg">
                                                    <i class="mdi mdi-help-circle"></i>
                                                </div>
                                                <div class="text-white">
                                                    <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left" style="font-size: 1.5rem;">Qui som</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card border-radius-2 bg-dark">
                                    <a href="{{ url('backend/serveis/1/edit') }}">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                                <div class="icon-rounded-inverse-success icon-rounded-lg">
                                                    <i class="mdi mdi-buffer"></i>
                                                </div>
                                                <div class="text-white">
                                                    <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left" style="font-size: 1.5rem;">Serveis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card border-radius-2 bg-dark">
                                    <a href="{{ route('backend.histories.index') }}">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                                <div class="icon-rounded-inverse-success icon-rounded-lg">
                                                    <i class="mdi mdi-book-open-variant"></i>
                                                </div>
                                                <div class="text-white">
                                                    <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left" style="font-size: 1.5rem;">Història</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card border-radius-2 bg-dark">
                                    <a href="{{ url('backend/certificacions/1/edit') }}">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                                <div class="icon-rounded-inverse-success icon-rounded-lg">
                                                    <i class="mdi mdi-certificate"></i>
                                                </div>
                                                <div class="text-white">
                                                    <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left" style="font-size: 1.5rem;">Certificacions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card border-radius-2 bg-dark">
                                    <a href="{{ route('backend.centres.index') }}">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                                <div class="icon-rounded-inverse-success icon-rounded-lg">
                                                    <i class="mdi mdi-settings"></i>
                                                </div>
                                                <div class="text-white">
                                                    <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left" style="font-size: 1.5rem;">Centres</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card border-radius-2 bg-dark">
                                    <a href="{{ route('backend.centres.index') }}">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                                <div class="icon-rounded-inverse-success icon-rounded-lg">
                                                    <i class="mdi mdi-apps"></i>
                                                </div>
                                                <div class="text-white">
                                                    <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left" style="font-size: 1.5rem;">Productes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
@endsection