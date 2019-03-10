@extends('frontend.layouts.default')

@section('content')

        <div class="columns is-centered">

            <div class="column is-14">

                <div class="content">
                    <h1 class="title is-3">{{$selectedPost->title}}</h1>
                    <h4 class="subtitle is-5">{{$selectedPost->publish_date->diffForHumans()}}</h4>

                    <div>
                        {!! $selectedPost->body !!}
                    </div>

                    <div class="tags">
                        @foreach($selectedPost->tags as $tag)
                            @if($postType != 'Journal')
                                <span class="tag is-primary is-large">{{$tag->name}}</span>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
        </div>


        @include('frontend.posts.author')

        @include('frontend.posts.similar-posts')

@endsection