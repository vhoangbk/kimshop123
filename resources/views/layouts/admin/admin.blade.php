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
    <title>Kim Shop</title>
    <!-- Icons -->
    <link href="{{ asset('css/admin/vendors/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/simple-line-icons.min.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/admin/css/style.css') }}?_t={{ time() }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/custom.css') }}?_t={{ time() }}" rel="stylesheet">

    <!-- Styles required by this views -->
    <link href="{{ asset('css/admin/vendors/css/daterangepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/gauge.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendors/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin/css/jquery-confirm.min.css') }}">
    <script src="{{ asset('css/admin/vendors/js/jquery.min.js') }}" ></script>
    <script src="https://cdnjs.com/libraries/Chart.js" ></script>
</head>

    @include('layouts.admin.partial.header', [
        'user' => auth()->user()
    ])

    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

        <div class="app-body">
            @include('layouts.admin.partial.sidebar')
            @yield('content')
        </div>

        @include('layouts.admin.partial.footer')
    </body>
</html>
