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
            font-size: 14px;
            font-weight: 200;
        }

        .sidebar {
            font-family: "Cairo", sans-serif;
            font-size: 14px !important;
            font-weight: 200;
        }

        .sidebar,
        .sidebar .sidebar-body .nav .nav-item .nav-link,
        .sidebar .sidebar-body .nav .nav-item .nav-link .link-title {
            font-family: "Cairo", sans-serif;
            font-size:0.875rem !important;
            font-weight: 200;
        }
    </style>
<style>
    html.dark-mode,
    html.dark-mode body {
        background-color: #121212 !important;
        color: #f0f0f0 !important;
    }

    html.dark-mode * {
        background-color: inherit !important;
        color: inherit !important;
        border-color: #333 !important;
        box-shadow: none !important;
    }

    html.dark-mode .navbar,
    html.dark-mode .sidebar,
    html.dark-mode .card,
    html.dark-mode .btn,
    html.dark-mode .dropdown-menu,
    html.dark-mode .form-control,
    html.dark-mode .table,
    html.dark-mode .modal-content {
        background-color: #1e1e2d !important;
        color: #fff !important;
        border-color: #444 !important;
    }

    html.dark-mode a {
        color: #90caf9 !important;
    }

    html.dark-mode .form-control::placeholder {
        color: #bbb !important;
    }

    html.dark-mode .table thead {
        background-color: #29293d !important;
    }

    html.dark-mode .text-dark {
        color: #ccc !important;
    }

    /* -----------------------------start Dark mode style ---------------------------- */
.dark-mode,
.dark-mode * {
    color: #ffffff !important;
}

.dark-mode .sidebar-toggler span {
    background-color: #ffffff !important;
}

.dark-mode a,
.dark-mode ul,
.dark-mode nav,
.dark-mode nav ul li a,
.dark-mode span,
.dark-mode li,
.dark-mode i,
.dark-mode label,
.dark-mode p,
.dark-mode td,
.dark-mode th,
.dark-mode h1,
.dark-mode h2,
.dark-mode h3,
.dark-mode h4,
.dark-mode h5,
.dark-mode h6,
.dark-mode small {
    color: #ffffff !important;
}
/* --------------------------- End Dark Mode Style -------------------------- */
</style>



    @yield('styles')
</head>
