<h2 class="title similar-title">{{$postType != 'Journal' ? 'Similar Articles' : 'Latest Journal Entries'}}</h2>
<div class="columns is-centered">
    @foreach($similarPosts as $similarPost)
        <div class="column is-4">
            <a href="{{route('post', $similarPost->slug)}}">

                <div class="card">
                    <div class="card-content">
                        <p class="subtitle">
                            {{$similarPost->title}}
                        </p>
                        <small>
                            {!! $similarPost->excerpt !!}
                        </small>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                          <span>
                            {{$selectedPost->author->name}}
                          </span>
                        </p>
                        <p class="card-footer-item">
                          <span>
                            {{$similarPost->publish_date->diffForHumans()}}
                          </span>
                        </p>
                    </footer>
                </div>
            </a>
        </div>

    @endforeach
</div>