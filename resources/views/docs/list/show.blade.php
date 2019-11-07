@extends('docs.layouts.app')


@section('content')
    <div class="page-header">
        <h4>
            <a href="{{ route('docs.index') }}">Documents</a>
            <small> / {{ $doc->title }}</small>
        </h4>
    </div>

    @include('flash::message')

    <div class="row container__article">
        <div class="col-md-3 sidebar__article">
            <aside>
                {{-- @include('articles.partial.search') --}}

                {{-- @include('tags.partial.index') --}}
            </aside>
        </div>

        <div class="col-md-9 show__doc">
            <article data-id="{{ $doc->id }}" id="item__doc" style="padding-top: 37px;">

                @include('docs.list.partial.docs', compact('doc'))

                <p>{!! markdown($doc->description) !!}</p>

            </article>

            <div class="text-center action__doc">
                @can('update', $doc)
                    <a href="{{ route('docs.edit', $doc->id) }}" class="btn btn-outline-info">
                        <i class="fa fa-pencil"></i> 수정
                    </a>
                @endcan
                @can('delete', $doc)
                    <button class="btn btn-outline-danger button__delete">
                        <i class="fa fa-trash-o"></i> 삭제
                    </button>
                @endcan
                <a href="{{ route('docs.index') }}" class="btn btn-outline-secondary">
                    <i class="fa fa-list"></i> 책 목록
                </a>
            </div>


        </div>
    </div>

@endsection

@section('script')
    <script>
        $('.button__delete').on('click', function (e) {
            var docId = $('article').data('id');

            if (confirm('등록된 책 목록을 삭제하시겠습니까?')) {
                $.ajax({
                    type: 'DELETE',
                    url: '/docs/' + docId
                }).then(function () {
                    window.location.href = '/docs';
                });
            }
        });
    </script>
@endsection
