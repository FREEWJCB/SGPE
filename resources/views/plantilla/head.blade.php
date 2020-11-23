<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('titulo','Inicio')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}"  /> --}}
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"  />
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('plantilla.menu')
        @yield('contenido')
    </div>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.overlayScrollbars.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
    <script type="text/javascript"> @include('js.combo') @include('js.crud') </script>

</body>
</html>
