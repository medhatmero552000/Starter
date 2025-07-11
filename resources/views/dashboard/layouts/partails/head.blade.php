@php
    $dir = App::getLocale() == 'ar' ? '-rtl' : '';
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI -@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/flatpickr/flatpickr.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->

    <link rel="stylesheet" href="{{ asset('assets/css/demo1/style' . $dir . '.css') }}">

    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" />
    <style>
        body {
            font-family: "Cairo", sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .sidebar {
            font-family: "Cairo", sans-serif;
            font-size: 16px !important;
            font-weight: 400;
        }

        .sidebar,
        .sidebar .sidebar-body .nav .nav-item .nav-link,
        .sidebar .sidebar-body .nav .nav-item .nav-link .link-title {
            font-family: "Cairo", sans-serif;
            font-size: 0.9375rem !important;
            font-weight: 400;
        }
    </style>
    @yield('styles')
</head>
