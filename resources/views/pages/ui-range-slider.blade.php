@extends('layouts.app')

@section('title', 'DeskApp - Bootstrap Admin Dashboard HTML Template')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/ion-rangeslider/css/ion.rangeSlider.css')}}"/>
@endpush

@section('main')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Range slider</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    UI Range slider
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container pd-0">
                <div class="pd-20 card-box mb-30">
                    <h4 class="h4 pb-10">Range slider HTML5</h4>
                    <div class="row">
                        <div class="col-md-6 mb-30 mb-md-0">
                            <input id="range_01"/>
                        </div>
                        <div class="col-md-6">
                            <input id="range_01_1"/>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <h4 class="h4 pb-10">range and step</h4>
                    <div class="row">
                        <div class="col-md-6 mb-30 mb-md-0">
                            <input id="range_02"/>
                        </div>
                        <div class="col-md-6">
                            <input id="range_02_1"/>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <h4 class="h4 pb-10">custom values</h4>
                    <div class="row">
                        <div class="col-md-6 mb-30 mb-md-0">
                            <input id="range_03"/>
                        </div>
                        <div class="col-md-6">
                            <input id="range_03_1"/>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <h4 class="h4 pb-10">Prettify visual look of numbers</h4>
                    <div class="row">
                        <div class="col-md-6 mb-30 mb-md-0">
                            <input id="range_04"/>
                        </div>
                        <div class="col-md-6">
                            <input id="range_04_1"/>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <h4 class="h4 pb-10">Visual details</h4>
                    <div class="row">
                        <div class="col-md-6 mb-30 mb-md-0">
                            <input id="range_05"/>
                        </div>
                        <div class="col-md-6">
                            <input id="range_05_1"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="{{asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('scripts/pages/range-slider-setting.js')}}"></script>
@endpush
