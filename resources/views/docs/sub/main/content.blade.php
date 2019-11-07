{{-- @if ($s)
    @include('books.sub.main.list', ['attachments' => $s->attachments])
@endif --}}

<main>
    @if ($sub)
        {{-- @if ($sub->sub_level===1)
            <h2>{{ $sub->sub_title }}</h2>
        @elseif($sub->sub_level===2) --}}
            <h3>{{ $sub->sub_title }}</h3>
        {{-- @else
            <h4>{{ $sub->sub_title }}</h4>
        @endif --}}

        <hr>

        <div class="main_content" v-pre>
            {!! markdown($sub->content) !!}
        </div>
    @endif
</main>
