@extends('frontend.layouts.default')

@section('content')

    <div class="columns is-centered">

        <div class="column is-8">

                @foreach($posts as $post)
                <div class="short-post">
                    <div class="card">
                        @if($post->featured_image)
                        <a href="{{route('post', $post->slug)}}">
                            <div class="card-image">
                                <figure class="image is-2by1">
                                <img src="{{$post->featured_image}}" alt="{{$post->title}}">
                                </figure>
                            </div>
                        </a>
                        @endif
                        <div class="card-content">
                            <div class="media">
                            
                            <div class="media-content">
                                <h2 class="title is-4"><a href="{{route('post', $post->slug)}}">{{$post->title}}</a></h2>
                                <p class="subtitle is-6"><a>{{$post->author->name}}</a> / <time datetime="2016-1-1">{{$post->publish_date->diffForHumans()}}</time></p>
                            </div>
                            </div>

                            <div class="content">
                            {!! $post->excerpt !!}
                            </div>
                            <a href="{{route('post', $post->slug)}}"><small>Read more...</small></a>
                        </div>
                    </div>
                </div>
                    
                @endforeach

                <div class="">
                    {!! $posts->links('pagination.default') !!}
                </div>
        </div>
        <div class="column is-4"></div>

    </div>

@endsection