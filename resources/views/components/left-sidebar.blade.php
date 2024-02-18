<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{url('/dsahboard-1')}}">
            <img src="{{asset('images/deskapp-logo.svg')}}" alt="" class="dark-logo"/>
            <img src="{{asset('images/deskapp-logo-white.svg')}}" alt="" class="light-logo"/>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span>
                        <span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <li><a class="{{ Request::is('dashboard-1') ? 'active':''}}" href="{{url('/dashboard-1')}}">
                                Dashboard style 1</a>
                        </li>
                        <li><a class="{{ Request::is('dashboard-2') ? 'active':''}}" href="{{url('/dashboard-2')}}">
                                Dashboard style 2</a>
                        </li>
                        <li><a class="{{ Request::is('dashboard-3') ? 'active':''}}" href="{{url('/dashboard-3')}}">
                                Dashboard style 3</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span>
                        <span class="mtext">Forms</span>
                    </a>
                    <ul class="submenu">
                        <li><a class="{{ Request::is('form-basic') ? 'active':''}}"
                                href="{{url('/form-basic')}}">
                                Form Basic</a></li>
                        <li>
                            <a class="{{ Request::is('advanced-components') ? 'active':''}}"
                                href="{{url('/advanced-components')}}">
                                Advanced Components</a>
                        </li>
                        <li><a class="{{ Request::is('form-wizard') ? 'active':''}}"
                                href="{{url('/form-wizard')}}">Form Wizard</a>
                        </li>
                        <li><a class="{{ Request::is('html5-editor') ? 'active':''}}"
                                href="{{url('/html5-editor')}}">HTML5 Editor</a>
                        </li>
                        <li><a class="{{ Request::is('form-pickers') ? 'active':''}}"
                                href="{{url('/form-pickers')}}">Form Pickers</a></li>
                        <li><a class="{{ Request::is('image-cropper') ? 'active':''}}"
                                href="{{url('/image-cropper')}}">Image Cropper</a></li>
                        <li><a class="{{ Request::is('image-dropzone') ? 'active':''}}"
                                href="{{url('/image-dropzone')}}">Image Dropzone</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span>
                        <span class="mtext">Tables</span>
                    </a>
                    <ul class="submenu">
                        <li><a class="{{ Request::is('basic-table') ? 'active':''}}"
                                href="{{url('/basic-table')}}">Basic Tables</a></li>
                        <li><a class="{{ Request::is('datatable') ? 'active':''}}"
                                href="{{url('/datatable')}}">DataTables</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle no-arrow {{ Request::is('calendar') ? 'active':''}}"
                        href="{{url('/calendar')}}">
                        <span class="micon bi bi-calendar4-week"></span>
                        <span class="mtext">Calendar</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-archive"></span>
                        <span class="mtext"> UI Elements </span>
                    </a>
                    <ul class="submenu">
                        <li><a class="{{ Request::is('ui-buttons') ? 'active':''}}"
                                href="{{url('/ui-buttons')}}">Buttons</a>
                        </li>
                        <li><a class="{{ Request::is('ui-cards') ? 'active':''}}"
                                href="{{url('/ui-cards')}}">Cards</a>
                        </li>
                        <li><a class="{{ Request::is('ui-cards-hover') ? 'active':''}}"
                                href="{{url('/ui-cards-hover')}}">Cards Hover</a>
                        </li>
                        <li><a class="{{ Request::is('ui-modals') ? 'active':''}}"
                                href="{{url('/ui-modals')}}">Modals</a>
                        </li>
                        <li><a class="{{ Request::is('ui-tabs') ? 'active':''}}"
                                href="{{url('/ui-tabs')}}">Tabs</a>
                        </li>
                        <li><a class="{{ Request::is('ui-tooltip-popover') ? 'active':''}}"
                                href="{{url('/ui-tooltip-popover')}}">Tooltip &amp; Popover</a>
                        </li>
                        <li><a class="{{ Request::is('ui-sweet-alert') ? 'active':''}}"
                                href="{{url('/ui-sweet-alert')}}">Sweet Alert</a>
                        </li>
                        <li><a class="{{ Request::is('ui-notification') ? 'active':''}}"
                                href="{{url('/ui-notification')}}">Notification</a>
                        </li>
                        <li><a class="{{ Request::is('ui-timeline') ? 'active':''}}"
                                href="{{url('/ui-timeline')}}">Timeline</a>
                        </li>
                        <li><a class="{{ Request::is('ui-progressbar') ? 'active':''}}"
                                href="{{url('/ui-progressbar')}}">Progressbar</a>
                        </li>
                        <li><a class="{{ Request::is('ui-typography') ? 'active':''}}"
                                href="{{url('/ui-typography')}}">Typography</a>
                        </li>
                        <li><a class="{{ Request::is('ui-list-group') ? 'active':''}}"
                                href="{{url('/ui-list-group')}}">List group</a>
                        </li>
                        <li><a class="{{ Request::is('ui-range-slider') ? 'active':''}}"
                                href="{{url('/ui-range-slider')}}">Range slider</a>
                        </li>
                        <li><a class="{{ Request::is('ui-carousel') ? 'active':''}}"
                                href="{{url('/ui-carousel')}}">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-command"></span>
                        <span class="mtext">Icons</span>
                    </a>
                    <ul class="submenu">
                        <li><a class="{{ Request::is('bootstrap-icon') ? 'active':''}}"
                                href="{{url('/bootstrap-icon')}}"> Bootstrap Icons</a>
                        </li>
                        <li><a class="{{ Request::is('font-awesome') ? 'active':''}}"
                                href="{{url('/font-awesome')}}"> FontAwesome Icons</a>
                        </li>
                        <li><a class="{{ Request::is('foundation') ? 'active':''}}"
                                href="{{url('/foundation')}}"> Foundation Icons</a>
                        </li>
                        <li><a class="{{ Request::is('ionicons') ? 'active':''}}"
                                href="{{url('/ionicons')}}"> Ionicons Icons</a>
                        </li>
                        <li><a class="{{ Request::is('themify') ? 'active':''}}"
                                href="{{url('/themify')}}"> Themify Icons</a>
                        </li>
                        <li><a class="{{ Request::is('custom-icon') ? 'active':''}}"
                                href="{{url('/custom-icon')}}"> Custom Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-pie-chart"></span>
                        <span class="mtext">Charts</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="../page/highchart.html">Highchart</a></li>
                        <li><a href="../page/knob-chart.html">jQuery Knob</a></li>
                        <li><a href="../page/jvectormap.html">jvectormap</a></li>
                        <li><a href="../page/apexcharts.html">Apexcharts</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-file-earmark-text"></span>
                        <span class="mtext">Additional Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="../page/video-player.html">Video Player</a></li>
                        <li><a href="../page/login.html">Login</a></li>
                        <li><a href="../page/forgot-password.html">Forgot Password</a></li>
                        <li><a href="../page/reset-password.html">Reset Password</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-bug"></span>
                        <span class="mtext">Error Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="../page/400.html">400</a></li>
                        <li><a href="../page/403.html">403</a></li>
                        <li><a href="../page/404.html">404</a></li>
                        <li><a href="../page/500.html">500</a></li>
                        <li><a href="../page/503.html">503</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-back"></span>
                        <span class="mtext">Extra Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="../page/blank.html">Blank</a></li>
                        <li><a href="../page/contact-directory.html">Contact Directory</a></li>
                        <li><a href="../page/blog.html">Blog</a></li>
                        <li><a href="../page/blog-detail.html">Blog Detail</a></li>
                        <li><a href="../page/product.html">Product</a></li>
                        <li><a href="../page/product-detail.html">Product Detail</a></li>
                        <li><a href="../page/faq.html">FAQ</a></li>
                        <li><a href="../page/profile.html">Profile</a></li>
                        <li><a href="../page/gallery.html">Gallery</a></li>
                        <li><a href="../page/pricing-table.html">Pricing Tables</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-hdd-stack"></span>
                        <span class="mtext">Multi Level Menu</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:">Level 1</a></li>
                        <li><a href="javascript:">Level 1</a></li>
                        <li><a href="javascript:">Level 1</a></li>
                        <li class="dropdown">
                            <a href="javascript:" class="dropdown-toggle">
                                <span class="micon fa fa-plug"></span>
                                <span class="mtext">Level 2</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="javascript:">Level 2</a></li>
                                <li><a href="javascript:">Level 2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:">Level 1</a></li>
                        <li><a href="javascript:">Level 1</a></li>
                        <li><a href="javascript:">Level 1</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../page/sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-diagram-3"></span>
                        <span class="mtext">Sitemap</span>
                    </a>
                </li>
                <li>
                    <a href="../page/chat.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-chat-right-dots"></span>
                        <span class="mtext">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="../page/invoice.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span>
                        <span class="mtext">Invoice</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="micon bi bi-file-pdf"></span>
                        <span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="../page/introduction.html">Introduction</a></li>
                        <li><a href="../page/getting-started.html">Getting Started</a></li>
                        <li><a href="../page/color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="../page/third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank"
                        class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-layout-text-window-reverse"></span>
                        <span class="mtext">Landing Page
                            <img src="{{asset('images/coming-soon.png')}}" width="25"/>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
