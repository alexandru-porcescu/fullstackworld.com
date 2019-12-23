@extends('frontend.layouts.default')

@section('content')

        <div class="columns is-centered">

            <div class="column is-9">
                <div class="card">
                    @if($selectedPost->featured_image)
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img src="{{$selectedPost->featured_image}}" alt="{{$selectedPost->title}}">
                        </figure>
                    </div>
                    @endif
                    <div class="card-content">
                        <h1 class="title is-3">{{$selectedPost->title}}</h1>
                        <h4 class="subtitle is-5 has-text-centered">
                            {{$selectedPost->publish_date->format('M d, Y')}} / <a>{{$selectedPost->author->name}}</a>
                        </h4>
                        <div class="content">
                            {!! $selectedPost->body !!}

                            <div class="tags">
                                @foreach($selectedPost->tags as $tag)
                                    @if($postType != 'Journal')
                                        <span class="tag is-grey is-medium has-text-dark">
                                            <a href="{{ route('tags', $tag->slug) }}">
                                                {{$tag->name}}
                                            </a>
                                        </span>
                                    @endif
                                @endforeach
                            </div>

                        </div>

                        @include('frontend.layouts.partials.social_share')

                    </div>
                </div>
                <br>
                @include('frontend.posts.similar-posts')
            </div>
            <div class="column is-3">
                @include('frontend.layouts.right-side.tags')
                @include('frontend.layouts.right-side.ads')
            </div>
        </div>

@endsection
