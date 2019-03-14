<div class="column is-one-third">
    <div class="short-post-card">
        <div class="card">
            <a href="{{route('post', $post->slug)}}">
                <div class="card-image">
                    <figure class="image is-2by1">
                    <img src="{{$post->featured_image ? $post->featured_image : asset('img/placeholder.png')}}" alt="{{$post->title}}">
                    </figure>
                </div>
            </a>
            <div class="card-content">
                <div class="media">
                
                    <div class="media-content">
                        <h2 class="title is-4"><a href="{{route('post', $post->slug)}}">{{$post->title}}</a></h2>
                        <p class="subtitle is-5"><time datetime="{{$post->publish_date}}"> {{$post->publish_date->format('M d, Y')}}</time></p>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>