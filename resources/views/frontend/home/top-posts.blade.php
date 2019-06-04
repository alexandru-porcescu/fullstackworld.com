<div class="tile is-ancestor">
    <div class="tile is-vertical is-8">
        <div class="tile">
            <div class="tile is-parent is-vertical">
                <article class="tile is-child notification is-primary is-pointer">
                    <h3 class="title">{{$topPosts[0]->title}}</h3>
                    <div class="media">
                        <div class="media-left">
                        <figure class="image is-24x24">
                            <img class="is-rounded" src="{{$topPosts[0]->author->avatar}}" />
                        </figure>
                        </div>
                        <div class="media-content">
                            <p class="subtitle is-6 has-text-grey">
                                <a href="#" class="is-link">{{$topPosts[0]->author->name}}</a>
                            </p>
                        </div>
                    </div>
                </article>

                <article class="tile is-child notification is-warning">
                    <h3 class="title">{{$topPosts[1]->title}}</h3>
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-24x24">
                                <img class="is-rounded" src="{{$topPosts[1]->author->avatar}}" />
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="subtitle is-6 has-text-grey">
                                <a href="#" class="is-link">{{$topPosts[1]->author->name}}</a>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-dark">
                    <div class="short-post-card">
                        <a href="http://fullstackworld.test/post/javascript-markdown-parser-markdown-it">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-2by1">
                                        <img src="{{$topPosts[2]->featured_image ? $topPosts[2]->featured_image : asset('img/placeholder.png')}}" alt="{{$topPosts[2]->title}}">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-24x24">
                                                <img class="is-rounded" src="{{$topPosts[2]->author->avatar}}" />
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <h3 class="title is-4">{{$topPosts[2]->title}}</h3>
                                            <p class="subtitle is-6 has-text-grey">
                                                <a href="#" class="is-link">{{$topPosts[2]->author->name}} </a>
                                                <time datetime="2019-04-25 02:51:00"> Apr 25, 2019</time>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </a>

                    </div>


                </article>
            </div>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child notification is-info">
                <p class="title">Wide tile</p>
                <p class="subtitle">Aligned with the right tile</p>
                <div class="content">
                    <!-- Content -->
                </div>
            </article>
        </div>
    </div>
    <div class="tile is-parent">
        <article class="tile is-child notification is-grey-lighter">
            <div class="content">
                <p class="title">Tall tile</p>
                <p class="subtitle">With even more content</p>
                <div class="content">
                    <!-- Content -->
                </div>
            </div>
        </article>
    </div>
</div>