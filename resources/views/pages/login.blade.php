@extends('layouts.auth')

@section('title', 'DeskApp - Bootstrap Admin Dashboard HTML Template')
@section('link-button', url('/register'))
@section('button', 'Register')

@push('style')

@endpush

@section('main')
    <div
        class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
    >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{asset('images/login-page-img.png')}}" alt=""/>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To DeskApp</h2>
                        </div>
                        @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group custom">
                                <input
                                    type="email" id="email" name="email"
                                    class="form-control form-control-lg"
                                    placeholder="Email"
                                    value="{{old('email')}}"
                                />
                                <div class="input-group-append custom">
                                    <span class="input-group-text">
                                        <i class="icon-copy dw dw-user1"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input
                                    type="password" id="password" name="password"
                                    class="form-control form-control-lg"
                                    placeholder="Password" value="{{old('password')}}"
                                />
                                <div class="input-group-append custom">
                                    <span class="input-group-text">
                                        <i class="dw dw-padlock1"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="remember_me" name="remember"
                                        />
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                    <div class="col-6">
                                        <div class="forgot-password">
                                            <a href="{{url('/forgot-password')}}">Forgot Password</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

@endpush
