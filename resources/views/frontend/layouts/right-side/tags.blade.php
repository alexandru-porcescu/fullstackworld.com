<div class="tags">
    @foreach($tags as $tag)
        <span class="tag is-primary is-large">{{$tag->name}}({{$tag->posts_count}})</span>
    @endforeach
</div>