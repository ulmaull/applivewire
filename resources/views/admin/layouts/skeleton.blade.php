<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Company Made with Sleek">
    <title>Administrator</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('admin/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <!-- No Extra plugin used -->
    <link href="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
{{--    <link href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />--}}
    <link href="{{ asset('admin/plugins/toastr/toastr.min.css') }}" rel="stylesheet" />
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('admin/css/sleek.css') }}" />
    <!-- FAVICON -->
    <link href="{{ asset('admin/img/favicon.png') }}" rel="shortcut icon" />
    <script src="{{ asset('admin/plugins/nprogress/nprogress.js') }}"></script>
    <link href="https://unpkg.com/sleek-dashboard/dist/assets/css/sleek.min.css">
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @livewireStyles
    @stack('css')
</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
@yield('app')
@livewireScripts
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jekyll-search.min.js') }}"></script>
{{--<script src="{{ asset('admin/plugins/charts/Chart.min.js') }}"></script>--}}
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('admin/js/sleek.bundle.js') }}"></script>
{{--<script src="{{ asset('vendor/livewire/livewire.js') }}" defer></script>--}}
@stack('js')
</body>

</html>
