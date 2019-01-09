@extends('frontend.layouts.default')

@section('content')

            <div class="columns is-centered">

                <div class="column is-12">

                    <div class="content">

                        <div class="short-post">
                            <a href="#"><h2 class="title is-3">{{$post->title}}</h2></a>
                            <h4 class="subtitle is-5">{{$post->publish_date->diffForHumans()}}</h4>

                            <div>
                                {!! $post->body !!}
                            </div>

                            <p>
                                @foreach($post->tags as $tag)
                                    <a href="#" title="" class="button is-primary">{{$tag->name}}</a>
                                @endforeach
                            </p>

                        </div>


                    </div>
                </div>

            </div>






@endsection