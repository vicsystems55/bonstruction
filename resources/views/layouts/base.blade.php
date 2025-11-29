<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">
<!-- Mirrored from html.themehour.net/Bonstruction/demo/home-5 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Oct 2025 15:15:55 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} - Bonstruction Engineering</title>
    <meta name="author" content="Bonstruction Engineering">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords"
        content="construction, engineering, project management, Nigeria, oil and gas, industrial construction, quality assurance">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png"> --}}
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-chrome-512x512.png">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png"> --}}
    <link rel="manifest" href="assets/img/favicons/manifest.json">

    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Outfit:wght@100..900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/style-copy.css">
</head>

<body class="">
    <div class="cursor-follower"></div>
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
    </div>
    <div class="preloader">
        {{-- <button class="th-btn preloaderCls">Cancel Preloader</button> --}}
        <div class="preloader-inner">
            <div class="mb-4"><img src="assets/img/normal/about_1_3.png" alt="img"></div><span class="loader">
                <span class="loading-text"></span></span>
        </div>
    </div>
    @include('layouts.mobile-menue')
    @include('layouts.sidebar')
    @include('layouts.header')


        @yield('content')


    @include('layouts.footer')
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%"
            viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
   
</body>
<!-- Mirrored from html.themehour.net/Bonstruction/demo/home-5 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Oct 2025 15:16:17 GMT -->

</html>
