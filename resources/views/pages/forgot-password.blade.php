@extends('layouts.auth')

@section('title', 'DeskApp - Bootstrap Admin Dashboard HTML Template')
@section('link-button', url('/login'))
@section('button', 'Login')

@push('style')

@endpush

@section('main')
    <div
        class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
    >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{url('images/forgot-password.png')}}" alt=""/>
                </div>
                <div class="col-md-6">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Forgot Password</h2>
                        </div>
                        <h6 class="mb-20">
                            Enter your email address to reset your password
                        </h6>
                        <form>
                            <div class="input-group custom">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    placeholder="Email"
                                />
                                <div class="input-group-append custom">
										<span class="input-group-text"
                                        ><i class="fa fa-envelope-o" aria-hidden="true"></i
                                            ></span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <div class="input-group mb-0">
                                        <!--
                                        use code for form submit
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                                    -->
                                        <a
                                            class="btn btn-primary btn-lg btn-block"
                                            href="{{url('/')}}"
                                        >Submit</a
                                        >
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div
                                        class="font-16 weight-600 text-center"
                                        data-color="#707373"
                                    >
                                        OR
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="input-group mb-0">
                                        <a
                                            class="btn btn-outline-primary btn-lg btn-block"
                                            href="{{{url('/login')}}}"
                                        >Login</a
                                        >
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
