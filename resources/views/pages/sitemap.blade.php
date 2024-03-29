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
                            <h4>Sitemap</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../pages/index.blade.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Sitemap
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="mb-30">
                <div class="pb-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="sitemap">
                                <h5 class="h5">Home</h5>
                                <ul>
                                    <li><a href="../pages/index.blade.php">Dashboard style 1</a></li>
                                    <li><a href="index2.html">Dashboard style 2</a></li>
                                </ul>
                            </div>
                            <div class="sitemap">
                                <h5 class="h5">Forms</h5>
                                <ul>
                                    <li><a href="form-basic.html">Form Basic</a></li>
                                    <li>
                                        <a href="advanced-components.html"
                                        >Advanced Components</a
                                        >
                                    </li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="html5-editor.html">HTML5 Editor</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="image-cropper.html">Image Cropper</a></li>
                                    <li><a href="image-dropzone.html">Image Dropzone</a></li>
                                </ul>
                            </div>
                            <div class="sitemap">
                                <h5 class="h5">Invoice</h5>
                                <ul>
                                    <li><a href="invoice.html">Invoice</a></li>
                                </ul>
                            </div>
                            <div class="sitemap">
                                <h5 class="h5">Chat Module</h5>
                                <ul>
                                    <li><a href="chat.html">Chat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="sitemap">
                                <h5 class="h5">Tables</h5>
                                <ul>
                                    <li><a href="basic-table.html">Basic Tables</a></li>
                                    <li><a href="datatable.html">DataTables</a></li>
                                </ul>
                            </div>
                            <div class="sitemap">
                                <h5 class="h5">Calendar</h5>
                                <ul>
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </div>
                            <div class="sitemap">
                                <h5 class="h5">Icons</h5>
                                <ul>
                                    <li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
                                    <li><a href="font-awesome.html">FontAwesome Icons</a></li>
                                    <li><a href="foundation.html">Foundation Icons</a></li>
                                    <li><a href="ionicons.html">Ionicons Icons</a></li>
                                    <li><a href="themify.html">Themify Icons</a></li>
                                </ul>
                            </div>
                            <div class="sitemap">
                                <h5 class="h5">Charts</h5>
                                <ul>
                                    <li><a href="highchart.html">Highchart</a></li>
                                    <li><a href="knob-chart.html">jQuery Knob</a></li>
                                    <li><a href="jvectormap.html">jvectormap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="sitemap">
                                <h5 class="h5">UI Elements</h5>
                                <ul>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li>
                                        <a href="ui-tooltip-popover.html"
                                        >Tooltip &amp; Popover</a
                                        >
                                    </li>
                                    <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-timeline.html">Timeline</a></li>
                                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-list-group.html">List group</a></li>
                                    <li><a href="ui-range-slider.html">Range slider</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="sitemap">
                                <h5 class="h5">Additional Pages</h5>
                                <ul>
                                    <li><a href="video-player.html">Video Player</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li>
                                        <a href="forgot-password.html">Forgot Password</a>
                                    </li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                    <li><a href="403.html">403</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="500.html">500</a></li>
                                </ul>
                            </div>
                            <div class="sitemap">
                                <h5 class="h5">Extra Pages</h5>
                                <ul>
                                    <li><a href="blank.html">Blank</a></li>
                                    <li>
                                        <a href="contact-directory.html">Contact Directory</a>
                                    </li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                    <li><a href="product.html">Product</a></li>
                                    <li><a href="product-detail.html">Product Detail</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricing-table.html">Pricing Tables</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="sitemap">
                                <h5 class="h5">Multi Level Sitemap</h5>
                                <ul>
                                    <li><a href="#">Level 1</a></li>
                                    <li><a href="#">Level 1</a></li>
                                    <li class="child">
                                        <h5 class="h5">Level 2</h5>
                                        <ul>
                                            <li><a href="#">Level 2</a></li>
                                            <li><a href="#">Level 2</a></li>
                                            <li class="child">
                                                <h5 class="h5">Level 3</h5>
                                                <ul>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
