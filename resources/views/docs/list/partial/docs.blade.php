<div class="media">
    <div class="media-body">
        <span class="media-heading">
            <a href="{{ route('docs.sub.index', $doc->id) }}">
                {{ $doc->title }}
            </a>
        </span>

        <p class="text-muted meta__article">
            <small> • {{ $doc->translator ? $doc->author.' (번역: '.$doc->translator.')' : $doc->author }}</small>
            <small> • {{ $doc->publisher }}</small>
            <small> {{ $doc->pub_date ? ' • '.$doc->pub_date : '' }}</small>
            @if (request()->getPathInfo()==='/docs')
                <small> [<a href="{{ route('docs.show', $doc->id) }}">M</a>]</small>
            @endif
            <small> / [{{ $doc->is_public === 1 ? '공개' : '비공개' }}]</small>
        </p>
    </div>
</div>
