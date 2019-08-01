@extends('frontend.layouts.default')

@section('content')

    <div class="columns is-centered">

        <div class="column is-12">

            <div class="content">

                <div class='columns'>
                    <div class='container profile'>
                        <div class='modal' id='edit-preferences-modal'>
                            <div class='modal-background'></div>
                            <div class='modal-card'>
                                <header class='modal-card-head'>
                                    <p class='modal-card-title'>Edit Preferences</p>
                                    <button class='delete'></button>
                                </header>
                                <section class='modal-card-body'>
                                    <label class='label'>Name</label>
                                    <p class='control'>
                                        <input class='input' placeholder='Text input' type='text'>
                                    </p>
                                    <label class='label'>Username</label>
                                    <p class='control has-icon has-icon-right'>
                                        <input class='input' placeholder='Text input' type='text' value='pmillerk'>
                                    </p>
                                    <label class='label'>Email</label>
                                    <p class='control has-icon has-icon-right'>
                                        <input class='input' placeholder='Email input' type='text' value='hello@'>
                                        <i class='fa fa-warning'></i>
                                        <span class='help is-danger'>This email is invalid</span>
                                    </p>
                                    <div class='control'>
                                        <div class='control-label is-pulled-left'>
                                            <label class='label'>Date of Birth</label>
                                        </div>
                                        <span>
                                          <span class='select'>
                                            <select>
                                              <option>Month</option>
                                              <option>With options</option>
                                            </select>
                                          </span>
                                          <span class='select'>
                                            <select>
                                              <option>Day</option>
                                              <option>With options</option>
                                            </select>
                                          </span>
                                          <span class='select'>
                                            <select>
                                              <option>Year</option>
                                              <option>With options</option>
                                            </select>
                                          </span>
                                        </span>
                                    </div>
                                    <label class='label'>Description</label>
                                    <p class='control'>
                                        <textarea class='textarea' placeholder='Describe Yourself!'></textarea>
                                    </p>
                                    <div class='content'>
                                        <h1>Optional Information</h1>
                                    </div>
                                    <label class='label'>Phone Number</label>
                                    <p class='control has-icon has-icon-right'>
                                        <input class='input' placeholder='Text input' type='text' value='+1 *** *** 0535'>
                                    </p>
                                    <label class='label'>Work</label>
                                    <p class='control has-icon has-icon-right'>
                                        <input class='input' placeholder='Text input' type='text' value='Greater Washington Publishing'>
                                    </p>
                                    <label class='label'>School</label>
                                    <p class='control has-icon has-icon-right'>
                                        <input class='input' placeholder='Text input' type='text' value='George Mason University'>
                                    </p>
                                </section>
                                <footer class='modal-card-foot'>
                                    <a class='button is-primary modal-save'>Save changes</a>
                                    <a class='button modal-cancel'>Cancel</a>
                                </footer>
                            </div>
                        </div>
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
                                    <p>
                                        <span class='title is-bold'>{{$author->name}}</span>
                                        <br>

                                    </p>
                                    <p class='tagline'>
                                        {!!$author->bio!!}
                                    </p>
                                </div>
                                <div class='column is-2-tablet is-4-mobile has-text-centered'>
                                    <p class='stat-val'>{{$author->posts->count()}}</p>
                                    <p class='stat-key'>posts</p>
                                </div>
                                <div class='column is-2-tablet is-4-mobile has-text-centered'>
                                    <p class='stat-val'>0</p>
                                    <p class='stat-key'>views</p>
                                </div>
                                <div class='column is-2-tablet is-4-mobile has-text-centered'>
                                    <p class='stat-val'>0</p>
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
                                    <li class='link'>
                                        <a>
                                          <span class='icon'>
                                            <i class='fa fa-tasks'></i>
                                          </span>
                                            <span>My Stack</span>
                                        </a>
                                    </li>
                                    <li class='link'>
                                        <a>
                                          <span class='icon'>
                                            <i class='fab fa-product-hunt'></i>
                                          </span>
                                            <span>Projects</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="container">
                            <div class="columns is-desktop is-multiline">
                                @include('frontend.blog.list')
                            </div>

                            <div class="">
                                {!! $posts->links('pagination.default') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
