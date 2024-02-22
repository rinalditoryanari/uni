<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8"/>
    <title>@yield('title')</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}"/>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('styles/core.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('styles/icon-font.min.css')}}"/>

    @stack('style')

    <link rel="stylesheet" type="text/css" href="{{asset('styles/style.css')}}"/>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({"gtm.start": new Date().getTime(), event: "gtm.js"});
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>
<body class="login-page">

<!-- Header -->
<div class="login-header box-shadow">
    <div
        class="container-fluid d-flex justify-content-between align-items-center"
    >
        <div class="brand-logo">
            <a href="{{url('/login')}}">
                <img src="{{asset('images/deskapp-logo.svg')}}" alt=""/>
            </a>
        </div>
{{--        <div class="login-menu">--}}
{{--            <ul>--}}
{{--                <li><a href="@yield('link-button')">@yield('button')</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
</div>

<!-- Content -->
@yield('main')

<!-- welcome modal start -->
{{--@include('components.welcome')--}}
<!-- welcome modal end -->
<!-- js -->
<script src="{{asset('scripts/pages/core.js')}}"></script>
<script src="{{asset('scripts/pages/script.min.js')}}"></script>
<script src="{{asset('scripts/pages/process.js')}}"></script>
<script src="{{asset('scripts/pages/layout-settings.js')}}"></script>

<!-- Content -->
@stack('script')
<!-- Google Tag Manager (noscript) -->
<noscript
>
    <iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
    >
</noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
