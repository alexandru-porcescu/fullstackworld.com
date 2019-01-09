@extends('frontend.layouts.default')

@section('content')

    <div class="columns is-centered">

        <div class="column is-12">

            <div class="content">
                @foreach($posts as $post)
                    <div class="short-post">
                        <a href="{{route('post', $post->slug)}}"><h2 class="title is-3">{{$post->title}}</h2></a>
                        <h4 class="subtitle is-5">{{$post->publish_date->diffForHumans()}}</h4>

                        <div>
                            {!! $post->excerpt !!}
                        </div>

                        <p>
                            <a href="{{route('post', $post->slug)}}" title="{{$post->title}}" class="is-pulled-right button is-outlined is-small">continue...</a>
                        </p>

                    </div>
                @endforeach

                <div class="">
                    {!! $posts->links('pagination.default') !!}
                </div>

            </div>
        </div>

    </div>

@endsection