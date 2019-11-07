    <!-- prev button * next button -->
    <div style="display:none" class="prev_next_indicator">
        @if (!request()->input('q'))
            @if($sub && $sub->seq>1)
                <a class="prev_icon" href="{{ route('docs.sub.show', [$doc->id, $subs->where('doc_id', $doc->id)->where('seq', $sub->seq-1)->first()->id]) }}" role="button">
                    <svg id="i-chevron-left" viewBox="0 0 32 32" width="25" height="25" fill="none" stroke="currentcolor" stroke-linecap="butt" stroke-linejoin="miter" stroke-width="5">
                        <path d="M20 30 L8 16 20 2" />
                    </svg>
                </a>
            @endif
            @if($sub && $sub->seq<(string)count($subs))
                <a class="next_icon" href="{{ route('docs.sub.show', [$doc->id, $subs->where('doc_id', $doc->id)->where('seq', $sub->seq+1)->first()->id]) }}" role="button">
                    <svg id="i-chevron-right" viewBox="0 0 32 32" width="25" height="25" fill="none" stroke="currentcolor" stroke-linecap="butt" stroke-linejoin="miter" stroke-width="5">
                        <path d="M12 30 L24 16 12 2" />
                    </svg>
                </a>
            @endif
        @endif
    </div>
