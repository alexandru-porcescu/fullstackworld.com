@if($similarPosts->count())
<h2 class="title similar-title">{{$postType != 'Journal' ? 'Similar Articles' : 'Latest Journal Entries'}}</h2>
<div class="columns">
    @foreach($similarPosts as $similarPost)
        <div class="column is-4">
        <div class="short-post">
            <div class="card">
                <a href="{{route('post', $similarPost->slug)}}">
                    <div class="card-image">
                        <figure class="image is-2by1">
                        <img src="{{$similarPost->featured_image ? $similarPost->featured_image : asset('img/placeholder.png')}}" alt="{{$similarPost->title}}">
                        </figure>
                    </div>
                </a>
                <div class="card-content">
                    <h2 class="subtitle is-4">
                        <a href="{{route('post', $similarPost->slug)}}">{{$similarPost->title}}</a>
                    </h2>
                    <div class="content">
                        {!! $similarPost->excerpt !!}
                    </div>
                    <a href="{{route('post', $similarPost->slug)}}" class="footer-link"><small>Read more...</small></a>
                </div>
            </div>
        </div>
        </div>

    @endforeach
</div>
@endif