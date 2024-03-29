@extends('layouts.app')

@section('title', 'DeskApp - Bootstrap Admin Dashboard HTML Template')

@push('style')

@endpush

@section('main')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Charts</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Charts
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
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart1"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart2"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart3"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart4"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart5"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart6"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart7"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <div id="chart8"></div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="{{asset('plugins/highcharts-6.0.7/code/highcharts.js')}}"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="{{asset('plugins/highcharts-6.0.7/code/highcharts-more.js')}}"></script>
    <script src="{{asset('scripts/pages/highchart-setting.js')}}"></script>
@endpush
