<div class="tile is-ancestor">
    <div class="tile is-vertical is-8">
        <div class="tile">
            <div class="tile is-parent is-vertical">
                <article class="tile is-child notification is-primary is-pointer">
                    <h3 class="title"><a href="{{route('post', $topPosts[0]->slug)}}">{{$topPosts[0]->title}}</a></h3>
                    <div class="media">
                        <div class="media-left">
                        <figure class="image is-24x24">
                            <img class="is-rounded" src="{{$topPosts[0]->author->avatar}}" />
                        </figure>
                        </div>
                        <div class="media-content">
                            <p class="subtitle is-6 has-text-grey">
                                <a href="javascript:void(0)" class="is-link">{{$topPosts[0]->author->name}}</a>
                                <small class="is-pulled-right">{{$topPosts[0]->publish_date->diffForHumans()}}</small>
                            </p>
                        </div>
                    </div>
                </article>

                <article class="tile is-child notification is-warning">
                    <h3 class="title"><a href="{{route('post', $topPosts[1]->slug)}}">{{$topPosts[1]->title}}</a></h3>
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-24x24">
                                <img class="is-rounded" src="{{$topPosts[1]->author->avatar}}" />
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="subtitle is-6 has-text-grey">
                                <a href="javascript:void(0)" class="is-link">{{$topPosts[1]->author->name}}</a>
                                <small class="is-pulled-right">{{$topPosts[1]->publish_date->diffForHumans()}}</small>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-link">
                    <h3 class="title"><a href="{{route('post', $topPosts[2]->slug)}}">{{$topPosts[2]->title}}</a></h3>
                    <p class="subtitle is-5 has-text-light">
                        {{$topPosts[2]->excerpt}}
                    </p>
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-24x24">
                                <img class="is-rounded" src="{{$topPosts[2]->author->avatar}}" />
                            </figure>
                        </div>
                        <div class="media-content">

                            <p class="subtitle is-6 has-text-dark">
                                <a href="javascript:void(0)">{{$topPosts[2]->author->name}}</a>
                                <small class="is-pulled-right">{{$topPosts[2]->publish_date->diffForHumans()}}</small>
                            </p>
                        </div>
                    </div>

                </article>
            </div>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child notification is-grey-lighter">
                <h3 class="title"><a href="{{route('post', $topPosts[3]->slug)}}">{{$topPosts[3]->title}}</a></h3>
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-24x24">
                            <img class="is-rounded" src="{{$topPosts[3]->author->avatar}}" />
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="subtitle is-6 has-text-grey">
                            <a href="javascript:void(0)">{{$topPosts[3]->author->name}}</a>
                            <small class="is-pulled-right">{{$topPosts[3]->publish_date->diffForHumans()}}</small>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="tile is-parent">
        <article class="tile is-child notification is-light">
            <figure class="image is-2by1">
                <img src="{{$topPosts[4]->featured_image ? $topPosts[4]->featured_image : asset('img/placeholder.png')}}" alt="{{$topPosts[4]->title}}">
            </figure>
            <h3 class="title mt-1"><a href="{{route('post', $topPosts[4]->slug)}}">{{$topPosts[4]->title}}</a></h3>
            <p class="subtitle is-5 has-text-grey-dark">
                {{$topPosts[4]->excerpt}}
            </p>
            <div class="media">
                <div class="media-left">
                    <figure class="image is-24x24">
                        <img class="is-rounded" src="{{$topPosts[4]->author->avatar}}" />
                    </figure>
                </div>
                <div class="media-content">

                    <p class="subtitle is-6 has-text-grey-dark">
                        <a href="javascript:void(0)">{{$topPosts[4]->author->name}}</a>
                        <small class="is-pulled-right">{{$topPosts[4]->publish_date->diffForHumans()}}</small>
                    </p>
                </div>
            </div>
        </article>

    </div>
</div>