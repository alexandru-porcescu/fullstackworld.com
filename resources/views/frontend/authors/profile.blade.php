@extends('frontend.layouts.default')

@section('content')

<div class="columns is-centered">

    <div class="column is-12">

        <div class='columns'>
            <div class='container profile'>
                <div class='section profile-heading'>
                    <div class='columns is-mobile is-multiline'>
                        <div class='column is-2'>
                          <span class='header-icon user-profile-image'>
                              <figure class="image is-128x128">
                                    <img class="is-rounded" alt="{{$author->name}}" src="{{$author->avatar}}">
                              </figure>
                          </span>
                        </div>
                        <div class='column is-4-tablet is-10-mobile name'>
                            <h1>
                                <span class='title is-bold'>{{$author->name}}</span>
                            </h1>
                            <p class='tagline'>
                                {!!$author->bio!!}
                            </p>
                        </div>
                        <div class='column is-2-tablet is-4-mobile has-text-centered'>
                            <p class='subtitle is-3'>{{$author->postsCount()}}</p>
                            <p class='stat-key'>posts</p>
                        </div>
                        <div class='column is-2-tablet is-4-mobile has-text-centered'>
                            <p class='subtitle is-3'>0</p>
                            <p class='stat-key'>views</p>
                        </div>
                        <div class='column is-2-tablet is-4-mobile has-text-centered'>
                            <p class='subtitle is-3'>0</p>
                            <p class='stat-key'>likes</p>
                        </div>
                    </div>
                </div>
                <div class='profile-options is-fullwidth'>
                    <div class='tabs is-fullwidth is-medium'>
                        <ul>
                            <li class='link is-active'>
                                <a>
                                  <span class='icon'>
                                    <i class='fa fa-list'></i>
                                  </span>
                                    <span>My Posts</span>
                                </a>
                            </li>
                            <li class='link'>
                                <a>
                                  <span class='icon'>
                                    <i class='fa fa-thumbs-up'></i>
                                  </span>
                                    <span>My Likes</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <div class="container is-widescren">
                    <div class="columns is-desktop">
                        <div class="column is-9">
                            <div class="columns is-desktop is-multiline">
                                @include('frontend.blog.list')
                            </div>
                            <div>
                                {!! $posts->links('pagination.default') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection