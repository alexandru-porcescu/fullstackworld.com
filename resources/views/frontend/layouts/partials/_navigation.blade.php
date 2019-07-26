    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">

        <div class="container is-widescren">
        <div class="navbar-brand">
            <a href="/" class="navbar-item router-link-exact-active router-link-active">
                <img src="{{ asset('img/logo/main.png') }}" class="logo" alt="Fullstackworld">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">

                <div class="navbar-item has-text-centered">
                    <div class="control has-icons-left">
                        <span class="icon is-small is-left">
                          <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="input is-rounded" placeholder="Search" id="main-search" name="main-search">
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="{{ route('blog') }}">
                        <i class="fas fa-list-ul is-info"></i>&nbsp;&nbsp;Topics
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="{{ route('tags', ['slug' => 'angular']) }}">
                            <i class="fab fa-angular has-text-danger"></i>&nbsp;Angular
                        </a>
                        <a class="navbar-item" href="{{ route('tags', ['slug' => 'vuejs']) }}">
                            <i class="fab fa-vuejs has-text-green"></i>&nbsp;Vue.js
                        </a>
                        <a class="navbar-item" href="{{ route('tags', ['slug' => 'reactjs']) }}">
                            <i class="fab fa-react has-text-info"></i>&nbsp;React
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{ route('tags', ['slug' => 'laravel']) }}">
                            <i class="fab fa-laravel has-text-orange"></i>&nbsp;Laravel
                        </a>
                    </div>
                </div>
                @if(auth('wink')->check())
                <div class="navbar-item ">
                    <a class="button is-rounded is-primary is-outlined" href="/wink/posts/new">
                        <i class="far fa-edit"></i>&nbsp;&nbsp;Write a Post
                    </a>
                </div>
                @else
                    <div class="navbar-item ">
                        <a class="button is-rounded is-primary is-outlined open-modal" href="javascript:void(0)" data-modal-id="#login-modal">
                            <i class="far fa-edit"></i>&nbsp;&nbsp;Write a Post
                        </a>
                    </div>
                @endif

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link is-arrowless" href="{{auth('wink')->check() ? '/wink/posts' : 'javascript:void(0)' }}">
                        <figure class="image is-32x32">
                            <img
                                class="is-rounded"
                                src="{{auth('wink')->check() ? auth('wink')->user()->avatar : asset('img/all/user-placeholder.png') }}"
                            >
                        </figure>
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        @if(auth('wink')->check())
                        <a class="navbar-item" href="/wink/team/{{auth('wink')->user()->id}}">Profile</a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="/wink/posts">Posts</a>
                        <a class="navbar-item" href="/wink/tags">Tags</a>
                        @if(auth('wink')->user()->is_admin)
                        <a class="navbar-item" href="/stats">Stats</a>
                        @endif
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="/wink/logout">
                            Logout
                        </a>
                        @else
                            <a class="navbar-item open-modal" href="javascript:void(0)" data-modal-id="#login-modal">
                                Login
                            </a>
                            <a class="navbar-item open-modal" href="javascript:void(0)" data-modal-id="#register-modal">
                                Signup
                            </a>
                        @endif
                    </div>
                </div>
            </div>


            </div>
        </div>
    </nav>

