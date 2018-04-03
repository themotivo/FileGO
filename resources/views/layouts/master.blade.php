<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link href="{{ asset('vendor/twitter/bootstrap/v4.0.0/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet">
        <link href="{{ asset('css/app.globals.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.styles.css') }}" rel="stylesheet">

        @yield('head_styles')

        <script>
            window.Motivo = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
        </script>

        <script src="{{ asset('vendor/jQuery/3.2.1/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('vendor/Ajax/libs/Popper/1.11.0/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/twitter/bootstrap/v4.0.0/js/bootstrap.min.js') }}"></script>

        @yield('head_scripts')

    </head>

    <body>

    @yield('content')

    @yield('body_scripts')

    </body>

</html>
