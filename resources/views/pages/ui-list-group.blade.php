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
                            <h4>List group</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    UI List group
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">Basic List</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">Links items List</h4>
                        <div class="list-group">
                            <a
                                href="#"
                                class="list-group-item list-group-item-action active"
                            >Cras justo odio</a
                            >
                            <a href="#" class="list-group-item list-group-item-action"
                            >Dapibus ac facilisis in</a
                            >
                            <a href="#" class="list-group-item list-group-item-action"
                            >Morbi leo risus</a
                            >
                            <a href="#" class="list-group-item list-group-item-action"
                            >Porta ac consectetur ac</a
                            >
                            <a
                                href="#"
                                class="list-group-item list-group-item-action disabled"
                            >Vestibulum at eros</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">buttons items List</h4>
                        <div class="list-group">
                            <button
                                type="button"
                                class="list-group-item list-group-item-action"
                            >
                                Cras justo odio
                            </button>
                            <button
                                type="button"
                                class="list-group-item list-group-item-action"
                            >
                                Dapibus ac facilisis in
                            </button>
                            <button
                                type="button"
                                class="list-group-item list-group-item-action active"
                            >
                                Morbi leo risus
                            </button>
                            <button
                                type="button"
                                class="list-group-item list-group-item-action"
                            >
                                Porta ac consectetur ac
                            </button>
                            <button
                                type="button"
                                class="list-group-item list-group-item-action"
                                disabled
                            >
                                Vestibulum at eros
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">Flush List</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">Disabled items List</h4>
                        <ul class="list-group">
                            <li class="list-group-item disabled">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">With badges List</h4>
                        <ul class="list-group">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center"
                            >
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center"
                            >
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center"
                            >
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center"
                            >
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">5</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center"
                            >
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">7</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">Contextual List</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-primary">
                                This is a primary list group item
                            </li>
                            <li class="list-group-item list-group-item-secondary">
                                This is a secondary list group item
                            </li>
                            <li class="list-group-item list-group-item-success">
                                This is a success list group item
                            </li>
                            <li class="list-group-item list-group-item-danger">
                                This is a danger list group item
                            </li>
                            <li class="list-group-item list-group-item-warning">
                                This is a warning list group item
                            </li>
                            <li class="list-group-item list-group-item-info">
                                This is a info list group item
                            </li>
                            <li class="list-group-item list-group-item-dark">
                                This is a dark list group item
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="mb-20 h4">Custom content List</h4>
                        <div class="list-group">
                            <a
                                href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start active"
                            >
                                <h5 class="mb-1 h5 color-white">List group item heading</h5>
                                <div class="pb-1">
                                    <small class="weight-600">3 days ago</small>
                                </div>
                                <p class="mb-1 font-14">
                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                    sed diam eget risus varius blandit.
                                </p>
                                <small>Donec id elit non mi porta.</small>
                            </a>
                            <a
                                href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start"
                            >
                                <h5 class="mb-1 h5">List group item heading</h5>
                                <div class="pb-1">
                                    <small class="text-muted weight-600">3 days ago</small>
                                </div>
                                <p class="mb-1 font-14">
                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                    sed diam eget risus varius blandit.
                                </p>
                                <small class="text-muted"
                                >Donec id elit non mi porta.</small
                                >
                            </a>
                            <a
                                href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start"
                            >
                                <h5 class="mb-1 h5">List group item heading</h5>
                                <div class="pb-1">
                                    <small class="text-muted weight-600">3 days ago</small>
                                </div>
                                <p class="mb-1 font-14">
                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                    sed diam eget risus varius blandit.
                                </p>
                                <small class="text-muted"
                                >Donec id elit non mi porta.</small
                                >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

@endpush
