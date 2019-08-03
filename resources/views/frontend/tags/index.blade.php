@extends('frontend.layouts.default')

@section('content')

    <div class="columns is-desktop">
        <div class="column is-9">

            <h1 class="title is-2 top-marginless">{{$pageTitle}}</h1>

            <div class="columns is-desktop is-multiline">
                @include('frontend.blog.list')
            </div>

            <div class="">
                {!! $posts->links('pagination.default') !!}
            </div>
        </div>
        <div class="column is-3">
            @include('frontend.layouts.right-side.tags')
        </div>

    </div>

@endsection
