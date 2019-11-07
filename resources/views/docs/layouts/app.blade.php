<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <link rel="icon" href="/favicon.ico">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @php
            $docTitle = (strpos(Route::currentRouteName(), 'sub'))
                ? 'Docs::'.$doc->title
                : 'Docs' ;
        @endphp

        <title>{{ $docTitle }}</title>

        <!-- Styles -->
        <link href="{{ asset('assets/docs/css/app.css') }}" rel="stylesheet">
        @if (Route::currentRouteName() === 'docs.sub.edit' OR Route::currentRouteName() === 'docs.sub.create')
            {!! editor_css() !!}
        @endif

    </head>

    <body>
        <div id="docs-app">
            @include('docs.layouts.partial.navigation')

            <div class="container-fluid">

                @yield('content')

            </div>

            @include('docs.layouts.partial.footer')
        </div>

        <!-- Script -->
        <script src="{{ asset('assets/docs/js/app.js') }}"></script>
        @yield('script')
        @if (Route::currentRouteName() === 'docs.sub.edit' OR Route::currentRouteName() === 'docs.sub.create')
            {!! editor_js() !!}
        @endif
    </body>
</html>
