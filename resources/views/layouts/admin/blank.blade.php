<!--
 * CoreUI Pro - Bootstrap 4 Admin Template
 * @version v1.0.8
 * @link http://coreui.io/pro/
 * Copyright (c) 2018 creativeLabs Łukasz Holeczek
 * @license http://coreui.io/pro/license/
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kim Shop</title>
    <!-- Icons -->
    <link href="{{ asset('css/admin/vendors/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/simple-line-icons.min.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/custom.css') }}" rel="stylesheet">

    <!-- Styles required by this views -->
    <link href="{{ asset('css/admin/vendors/css/daterangepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/gauge.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin/css/jquery-confirm.min.css') }}">
    <script src="{{ asset('css/admin/vendors/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('css/admin/vendors/js/popper.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/js/bootstrap.min.js') }}"></script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

    <div class="app-body">
        @yield('content')
    </div>

</body>
</html>
