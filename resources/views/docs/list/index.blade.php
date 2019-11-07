@extends('docs.layouts.app')


@section('content')
    <div class="page-header">
        <h4>
            Documents
            <small> / List</small>
        </h4>
    </div>

    @include('flash::message')

    <div class="text-right action__book">
        <a href="{{ route('docs.create') }}" class="btn btn-primary">
            <i class="fa fa-plus-circle"></i> 문서 등록
        </a>

        <!--정렬 UI-->
        <div class="btn-group sort__book">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-sort"></i> 목록 정렬<span class="caret"></span>
            </button>

            <ul class="dropdown-menu dropdown-menu-right text-center" role="menu">
                @foreach(config('settings.sorting') as $column => $text)
                    <li {!! request()->input('sort') == $column ? 'class="active"' : '' !!}>
                        {!! link_for_sort($column, $text) !!}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row container__book">
        <div class="col-md-3 sidebar__book">
            <aside>
                {{-- @include('articles.partial.search') --}}

                {{-- @include('tags.partial.index') --}}
            </aside>
        </div>

        <div class="col-md-9 list__book">
            <article>
                @forelse($docs as $doc)
                    @include('docs.list.partial.docs', compact('doc'))
                @empty
                    <p class="text-danger" style="padding: 150px">
                        등록된 책이 없습니다.
                    </p>
                @endforelse
            </article>

            @if($docs->count())
                <div class="text-center" style="padding-top: 50px;">
                    {!! $docs->appends(request()->except('page'))->render() !!}
                </div>
            @endif
        </div>
    </div>

@endsection
