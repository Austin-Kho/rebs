        <!-- side bar start -->
        <nav class="col-sm-12 col-md-3 sidebar" style="display: none;">
            <div class="toc bg-light" data-spy="affix_">
                <div class="row">
                    <div class="col-9 col-sm-10">
                        <a class="nav-link active ellipsis sidebar-heading" href="{{ route('docs.sub.index', $doc->id) }}"><svg id="i-book" viewBox="0 0 32 32" width="20" height="20" fill="orange" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M16 7 C16 7 9 1 2 6 L2 28 C9 23 16 28 16 28 16 28 23 23 30 28 L30 6 C23 1 16 7 16 7 Z M16 7 L16 28" />
                            </svg> {{ $doc->title }}<span class="sr-only">(current)</span>
                        </a>
                    </div>
                    <div class="col-3 col-sm-2 text-right">
                        <small>
                            <a class="menu_link menu-toggle col-2">
                                <i class="fa fa-bars"></i>
                            </a>
                        </small>
                    </div>
                </div>

                <div class="nav nav-sidebar list-group ellipsis">
                    {{-- Side Index Group --}}
                    @foreach ($subs as $s)
                        <a href="{{ route('docs.sub.show', [$doc->id, $s->id]) }}" class="{{ ((!$sub->id) or ($s->id===$sub->id)) ? 'active' : '' }} list-group-item">
                            <span style="white-space:nowrap; overflow:hidden; display:block;">
                                <span class="{{"d".$s->sub_level}}">
                                    {{$s->sub_title}}
                                    @if(($s->id==='1' and $sub->id==='1') or $sub->id===$s->id)
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </span>
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
            <footer class="side_footer row">
                <div class="col-sm-6">
                    &copy; {{ date('Y') }}
                    <a href="{{ config('app.url') }}">
                        {{ config('app.name') }}
                    </a>
                </div>
                <div class="col-sm-6 text-right">
                    @if (Auth::user()->isAdmin() || (Auth::user()->id === $doc->user_id))
                        <a href="{{ route('docs.sub.create', $doc->id) }}" class="btn btn-sm btn-outline-primary">
                            <i class="fa fa-plus-circle"></i> 등록
                        </a>
                        @if ($sub)
                            <a href="{{ route('docs.sub.edit', [$doc->id, $sub->id]) }}" class="btn btn-sm btn-outline-success">
                                <i class="fa fa-edit"></i> 수정
                            </a>
                            {{-- <a href="{{ route('docs.sub.destroy', [$doc->id, $sub->id]) }}" class="btn btn-sm btn-outline-danger button__delete">
                                <i class="fa fa-minus-circle"></i> 삭제
                            </a> --}}
                        @endif
                    @endif
                </div>
            </footer>
        </nav>
        <!-- side bar end -->
