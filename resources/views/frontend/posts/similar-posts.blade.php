<h2 class="title similar-title">{{$postType != 'Journal' ? 'Similar Articles' : 'Latest Journal Entries'}}</h2>
<div class="columns is-centered">
    @foreach($similarPosts as $similarPost)
        <div class="column is-4">

                <div class="card">
                    <div class="card-content">
                        <p class="subtitle">
                            <a href="{{route('post', $similarPost->slug)}}">{{$similarPost->title}}</a>
                        </p>
                        <small>
                            {!! $similarPost->excerpt !!}
                        </small>
                    </div>
                </div>
        </div>

    @endforeach
</div>