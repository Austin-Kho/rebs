@extends('docs.layouts.app')


@section('content')
    <div class="page-header">
        <h4>
            <a href="{{ route('docs.index') }}">Documents</a>
            <small> / Modify / {{ $doc->title }}</small>
        </h4>
    </div>

    <div class="row container__article">
        <div class="col-md-1 sidebar__article"></div>

        <div class="col-md-10 list__article">
            <form action="{{ route('docs.update', $doc->id) }}" method="POST" class="form__article">
                {!! csrf_field() !!}
                {!! method_field('PUT') !!}

                @include('docs.list.partial.form')

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">수정하기</button>
                </div>
            </form>
        </div>

        <div class="col-md-1 sidebar__article"></div>
    </div>

@endsection
