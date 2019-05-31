@extends('frontend.layouts.default')

@section('content')

    <div class="columns is-centered">

        <div class="column is-12">

            <div class="content page-content">
                <h1>{{$page->title}}</h1>
                {!! $page->body !!}
            </div>
        </div>

    </div>

@endsection