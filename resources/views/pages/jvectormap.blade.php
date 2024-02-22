@extends('layouts.app')

@section('title', 'DeskApp - Bootstrap Admin Dashboard HTML Template')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>
@endpush

@section('main')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>jvectormap</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    jvectormap
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a
                                class="btn btn-primary dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                January 2020
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-0 card-box height-100-p overflow-hidden">
                        <div
                            id="chart1"
                            style="width: 100% !important; height: 615px"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('scripts/pages/jvectormap-setting.js')}}"></script>
@endpush
