@extends('docs.layouts.app')

@section('content')

    <div class="page-header">
        <h4>
            <a href="{{ route('docs.index') }}">Documents</a>
            <small> / Register</small>
        </h4>
    </div>

    <div class="row container__book">
        <div class="col-md-1 sidebar__book"></div>

        <div class="col-md-10 list__book">
            <form action="{{ route('docs.store') }}" method="POST" enctype="multipart/form-data" class="form__book">
                {!! csrf_field() !!}

                @include('docs.list.partial.form')

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">등록하기</button>
                </div>
            </form>
        </div>

        <div class="col-md-1 sidebar__book"></div>
    </div>

@endsection
