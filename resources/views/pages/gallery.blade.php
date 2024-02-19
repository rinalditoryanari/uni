@extends('layouts.app')

@section('title', 'DeskApp - Bootstrap Admin Dashboard HTML Template')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/fancybox/dist/jquery.fancybox.css')}}"/>

@endpush

@section('main')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Gallery</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Gallery
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="gallery-wrap">
                <ul class="row">
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img1.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img1.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img2.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img2.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img3.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img3.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img4.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img4.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img1.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img1.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img2.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img2.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img3.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img3.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img4.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img4.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{asset('images/product-img1.jpg')}}" alt=""/>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <h5 class="mb-10 color-white pd-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                        </h5>
                                        <ul class="clearfix">
                                            <li>
                                                <a
                                                    href="{{asset('images/product-img1.jpg')}}"
                                                    data-fancybox="images"
                                                ><i class="fa fa-picture-o"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <!-- fancybox Popup Js -->
    <script src="{{asset('plugins/fancybox/dist/jquery.fancybox.js')}}"></script>
@endpush
