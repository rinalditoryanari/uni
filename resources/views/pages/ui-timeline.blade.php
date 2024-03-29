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
                            <h4>Timeline</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    UI Timeline
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container pd-0">
                <div class="timeline mb-30">
                    <ul>
                        <li>
                            <div class="timeline-date">15 Jan 2020</div>
                            <div class="timeline-desc card-box">
                                <div class="pd-20">
                                    <h4 class="mb-10 h4">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit
                                        anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-date">14 Jan 2020</div>
                            <div class="timeline-desc card-box">
                                <div class="pd-20">
                                    <h4 class="mb-10 h4">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit
                                        anim id est laborum.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit
                                        anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-date">13 Jan 2020</div>
                            <div class="timeline-desc card-box">
                                <div class="card card-box">
                                    <img
                                        class="card-img-top"
                                        src="{{asset('images/img2.jpg')}}"
                                        alt="Card image cap"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title weight-500">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and
                                            make up the bulk of the card's content.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-date">12 Jan 2020</div>
                            <div class="timeline-desc card-box">
                                <div class="pd-20">
                                    <blockquote class="blockquote mb-0">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in
                                            reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non proident, sunt in culpa qui officia
                                            deserunt mollit anim id est laborum.
                                        </p>
                                        <footer class="blockquote-footer">
                                            <small>
                                                Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

@endpush
