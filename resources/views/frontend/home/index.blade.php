@extends('frontend.layouts.default')

@section('content')
    <div class="title-box">
        <h1 class="title is-2 is-inline top-marginless">Whats new in Laravel</h1>
        <a href="{{ route('tags', ['slug' => 'laravel']) }}" title="{{ route('tags', ['slug' => 'laravel']) }}"><small class="is-pulled-right">View All</small></a>
    </div>
    <div class="columns is-multiline">
        @foreach($laravelPosts as $post)
            @include('frontend.home.post-card')
                
        @endforeach
    </div>

    <div class="title-box">
        <h2 class="title is-2 is-inline">Vue.js posts</h2>
        <a href="{{ route('tags', ['slug' => 'vuejs']) }}" title="{{ route('tags', ['slug' => 'vuejs']) }}"><small class="is-pulled-right">View All</small></a>
    </div>
    <div class="columns is-multiline">
        @foreach($vuejsPosts as $post)
            @include('frontend.home.post-card')
                
        @endforeach
    </div>

    <div class="title-box">
        <h2 class="title is-2 is-inline">Latest in Angular</h2>
        <a href="{{ route('tags', ['slug' => 'angular']) }}" title="{{ route('tags', ['slug' => 'angular']) }}"><small class="is-pulled-right">View All</small></a>
    </div>
    <div class="columns is-multiline">
        @foreach($angularPosts as $post)
            @include('frontend.home.post-card')
                
        @endforeach
    </div>

@endsection