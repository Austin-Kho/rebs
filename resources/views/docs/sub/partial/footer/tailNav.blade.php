<div class="page-prev-next" style="padding: 8px;">
    <div class="clearfix">
        <ul>
            @if (!request()->input('q'))
                @if($sub && $sub->seq>1)
                    <li>
                        <strong>이전글</strong> :
                        <a href="{{ route('docs.sub.show', [$doc->id, $subs->where('doc_id', $doc->id)->where('seq', $sub->seq-1)->first()->id]) }}">
                            {{ $subs->where('doc_id', $doc->id)->where('seq', $sub->seq-1)->first()->sub_title }}
                        </a>
                    </li>
                @endif

                @if($sub && $sub->seq<count($subs))
                    <li>
                        <strong>다음글</strong> :
                        <a href="{{ route('docs.sub.show', [$doc->id, $subs->where('doc_id', $doc->id)->where('seq', $sub->seq+1)->first()->id]) }}">
                            {{ $subs->where('doc_id', $doc->id)->where('seq', $sub->seq+1)->first()->sub_title }}
                        </a>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</div>
