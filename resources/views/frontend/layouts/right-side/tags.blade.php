<div class="tags">
    @foreach($tags as $tag)
        <span class="tag is-grey is-medium has-text-dark">
                <a href="{{ route('tags', $tag->slug) }}">{{$tag->name}}({{$tag->posts_count}})</a>
        </span>
    @endforeach
</div>