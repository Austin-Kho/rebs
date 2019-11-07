<main class="search-body">
    @forelse ($results as $rlt)
        <ul>
            <li>
                <h6 class="media-heading">
                    <a href="{{ route('docs.sub.show', [$doc->id, $rlt->id]) }}">
                        {{ $rlt->sub_title }}
                    </a>
                    <small>
                        : <u>{{ cut_string($rlt->content, 100, '...') }}</u>
                    </small>
                </h6>
            </li>
        </ul>
    @empty
        <div class="text-center text-danger" style="margin: 150px 0;">
            <p>해당 키워드의 검색 항목이 없습니다.</p>
        </div>

    @endforelse
</main>
