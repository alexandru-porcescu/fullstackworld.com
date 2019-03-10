<div class="card">
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure class="image is-48x48">
                    <img src="{{$selectedPost->author->avatar}}" alt="{{$selectedPost->author->name}}">
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4">{{$selectedPost->author->name}}</p>
                <p class="subtitle is-6">{{'@'.$selectedPost->author->slug}}</p>
            </div>
        </div>

        <div class="content">
            {!! $selectedPost->author->bio !!}

        </div>
        <p class="card-footer-item">
            @if($selectedPost->author->meta['opengraph_title'])
                <a target="_blank" href="{{$selectedPost->author->meta['opengraph_title']}}" title="Github" class="button is-small is-light navbar-icon"><i class="fab fa-twitter"></i></a>
            @endif

            @if($selectedPost->author->meta['opengraph_description'])
                <a target="_blank" href="{{$selectedPost->author->meta['opengraph_description']}}" title="Twitter" class="button is-small is-light navbar-icon"><i class="fab fa-linkedin"></i></a>
            @endif

            @if($selectedPost->author->meta['twitter_title'])
                <a target="_blank" href="{{$selectedPost->author->meta['twitter_title']}}" title="Linkedin" class="button is-small is-light navbar-icon"><i class="fab fa-github"></i></a>
            @endif
        </p>
    </div>
</div>