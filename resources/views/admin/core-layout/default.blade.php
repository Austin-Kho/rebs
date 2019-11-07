@extends('admin/core-layout.master')

@section('header')
    @include('admin/core-layout.partials.header')
@endsection

@section('content')

    <div class="app-body">

        @if(View::exists('admin.layout.sidebar'))
            @include('admin.layout.sidebar')
        @endif

        <main class="main">
            @if(View::exists('admin.layout.header.sub-header'))
                @include('admin.layout.header.sub-header')
            @endif

            <div class="container-fluid" id="app" :class="{'loading': loading}">
                <div class="modals">
                    <v-dialog/>
                </div>
                <div>
                    <notifications position="bottom right" :duration="2000" />
                </div>

                @yield('body')
            </div>
        </main>

        @if(View::exists('admin.layout.aside-menu'))
            @include('admin.layout.aside-menu')
        @endif
    </div>

    @if(View::exists('admin.layout.footer.copyright'))
        @include('admin.layout.footer.copyright')
    @endif

@endsection

@section('bottom-scripts')
    @parent
@endsection
