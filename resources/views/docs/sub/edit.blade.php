@extends('docs.layouts.app')

@section('content')

    <div style="height: 80px;"></div>

    <div class="page-header">
        <h4>
            <svg id="i-book" viewBox="0 0 32 32" width="20" height="20" fill="orange" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M16 7 C16 7 9 1 2 6 L2 28 C9 23 16 28 16 28 16 28 23 23 30 28 L30 6 C23 1 16 7 16 7 Z M16 7 L16 28" />
            </svg> <a class="" href="{{ route('docs.sub.show', [$doc->id, $sub->id]) }}"> Content</a>
            <small> / [수정] / {{ $doc->title }}</small>
        </h4>
    </div>


    <form name="subject" action="{{ route('docs.sub.update', [$doc->id, $sub->id]) }}" method="POST" enctype="multipart/form-data" class="form__article">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <div class="row container__article">

            @include('docs.sub.partial.form')

        </div>
    </form>

@endsection
