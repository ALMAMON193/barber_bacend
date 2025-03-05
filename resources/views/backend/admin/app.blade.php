<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ config('app.name') }} - Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
    @include('backend.admin.partials.style')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Header Start ========== -->
        @include('backend.admin.partials.header')
        <!-- ========== Header End ========== -->

        <!-- ========== App Menu ========== -->
        @include('backend.admin.partials.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    @include('backend.admin.partials.script')
</body>
</html>

