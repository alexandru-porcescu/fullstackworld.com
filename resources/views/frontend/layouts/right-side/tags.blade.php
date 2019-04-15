<div class="tags">
    @foreach($tags as $tag)
        <a href="{{ route('tags', $tag->slug) }}">
                <span class="tag is-primary is-large">{{$tag->name}}({{$tag->posts_count}})</span>
        </a>
    @endforeach
</div>