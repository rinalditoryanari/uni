@extends('layouts.app')

@section('title', 'DeskApp - Bootstrap Admin Dashboard HTML Template')

@push('style')

@endpush

@section('main')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Cards Hover</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    UI Cards Hover
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fade-in effect -->
            <h5 class="h4 text-blue mb-10">Fade-in effect</h5>
            <p class="mb-30">You can use by default <code>.da-overlay</code></p>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo1.jpg')}}" alt=""/>
                            <div class="da-overlay">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo2.jpg')}}" alt=""/>
                            <div class="da-overlay">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo3.jpg')}}" alt=""/>
                            <div class="da-overlay">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo4.jpg')}}" alt=""/>
                            <div class="da-overlay">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Left effect -->
            <h5 class="h4 text-blue mb-10">Slide Left effect</h5>
            <p class="mb-30">
                You can use by default <code>.da-overlay .da-slide-left</code>
            </p>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo1.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-left">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo2.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-left">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo3.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-left">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo4.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-left">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Right effect -->
            <h5 class="h4 text-blue mb-10">Slide Right effect</h5>
            <p class="mb-30">
                You can use by default <code>.da-overlay .da-slide-right</code>
            </p>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo1.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-right">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo2.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-right">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo3.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-right">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo4.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-right">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Top effect -->
            <h5 class="h4 text-blue mb-10">Slide Top effect</h5>
            <p class="mb-30">
                You can use by default <code>.da-overlay .da-slide-top</code>
            </p>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo1.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-top">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo2.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-top">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo3.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-top">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo4.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-top">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Bottom effect -->
            <h5 class="h4 text-blue mb-10">Slide Bottom effect</h5>
            <p class="mb-30">
                You can use by default <code>.da-overlay .da-slide-bottom</code>
            </p>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo1.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-bottom">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo2.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-bottom">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo3.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-bottom">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div class="da-card-photo">
                            <img src="{{asset('images/photo4.jpg')}}" alt=""/>
                            <div class="da-overlay da-slide-bottom">
                                <div class="da-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="da-card-content">
                            <h5 class="h5 mb-10">Don H. Rabon</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

@endpush
