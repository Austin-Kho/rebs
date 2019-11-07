<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/assets/home/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- @include('admin.layouts.partials.favicons') --}}
    @yield('styles')
</head>
<body class="layout-default skin-stark">
    @include('home.layouts.partials.notifs')

    <div id="app" class="wrapper">
        @include('home.layouts.partials.sidebar')

        <div id="content">
            @include('home.layouts.partials.header')

            <div class="main-contents">
                @yield('content')
            </div>

            @include('home.layouts.partials.footer')
        </div>
    </div>

    <script src="{{ asset('/assets/home/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/home/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
