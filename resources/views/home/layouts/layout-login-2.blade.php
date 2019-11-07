<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('/assets/home/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- @include('admin.layouts.partials.favicons') --}}
</head>
<body class="login-page login-2">
    <div id="app" class="login-wrapper">
        <div class="login-box">
            @include('home.layouts.partials.notifs')
            <div class="logo-main">
                <a href="/"><img src="/assets/home/img/logo-large.png" alt="{{config('app.name')}} Logo"></a>
            </div>
            @yield('content')
            <div class="page-copyright">
                <p>Powered by <a href="/" target="_blank">{{config('app.name')}}</a></p>
                <p>{{config('app.name')}} © {{ date('Y') }}</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('/assets/home/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/home/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
