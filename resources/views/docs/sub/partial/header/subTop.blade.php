        <!-- sub_top start -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <div class="col-sm-12 col-md-9 breadcrumb-wrap">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('docs.sub.index', $doc->id) }}"><ion-icon name="bookmarks" v-pre></ion-icon> {{$doc->title}}</a>
                        </li>
                        @php
                            $bread_sub = [];

                            if ($sub and !request()->input('q')) {
                                for ($i = 1; $i <= $sub->sub_level; $i++) { // 현재 레벨 동안 실행

                                    for ($j = 1; $j <= $sub->seq; $j++) { // 현재 단원 순서까지 검사
                                        if ($subs->where('seq', $j)->first()) {
                                            if ($subs->where('seq', $j)->first()->sub_level === $i) { // 각 단원이 레벨과 같으면
                                                $bread_sub[$i] = $subs->where('seq', $j)->first();
                                            }
                                        }
                                    }
                                    if($bread_sub[$i]){                   // 만약 배열이 false (빈배열)가 아니면
                                        $fcl = ($sub->sub_level > $i)       // 레벨1 제목이 현재 아이디와 같으면
                                            ? "breadcrumb-item active"    // 활성 브레드크럼
                                            : "breadcrumb-item";          // 비활성 브레드크럼
                                    }
                                }
                            }
                        @endphp

                        @if($sub && $bread_sub)  <!-- 레벨1 제목 배열이 존재하면 -->
                            @for ($i = 1; $i <= $sub->sub_level; $i++)
                                <li class="{{$fcl}}" @if ($sub->sub_level > $i) aria-current="page" @endif>
                                    @if($sub->sub_level > $i)<a href="{{ route('docs.sub.show', [$doc->id, $bread_sub[$i]->id]) }}">@endif
                                        {{ $bread_sub[$i]->sub_title }}
                                    @if($sub->sub_level > $i)</a>@endif
                                </li>
                            @endfor
                        @endif
                    </ol>
                </nav>
            </div>

            <div class="btn-toolbar col-sm-12 col-md-3 ellipsis d-none d-sm-none d-md-block">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>
        <hr class="d-none d-sm-none d-md-block">
        <!-- sub_top end -->
