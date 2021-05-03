
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    {{--Datatables CSS and JS--}}
{{--    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">--}}
{{--    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/af-2.3.6/b-1.7.0/fc-3.3.2/fh-3.1.8/kt-2.6.1/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.6/css/autoFill.bootstrap5.min.css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/af-2.3.6/b-1.7.0/fc-3.3.2/fh-3.1.8/kt-2.6.1/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.js"></script>
{{--    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="c-app">
@include('components.admin.sidebar')

<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed">
    </header>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                    @yield('content')
            </div>
        </main>
    </div>
    <footer class="c-footer">
        <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
        <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div>
    </footer>
</div>
{{--<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
<!-- Optional JavaScript -->
<!-- Popper.js first, then CoreUI JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
@yield('script')
</body>
</html>
