
<div class="card-body pt-3">
    <h4>{{ $dialog->title }}</h4>
    @php
        $content = $dialog->content;
        $contentLength = Str::length($content);
    @endphp
    @if ($contentLength > 80)
        @php
            $content1 = Str::substr($content, 0, 80);
            $content2 = Str::substr($content, 80, $contentLength);
        @endphp
        <p>{{ $content1 }}<span class="dots">...</span>
            <span class="more">{{ $content2 }}</span>
        </p>
        <button onclick="readMore(this)" class="read-more-button">Read more</button>
    @else
        <p>{{ $dialog->content }}</p>
    @endif
</div>
