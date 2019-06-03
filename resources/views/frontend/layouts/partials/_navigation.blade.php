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

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link is-arrowless" href="{{auth('wink')->check() ? route('blog') : '/wink/login' }}">
                        <figure class="image is-32x32">
                            <img class="is-rounded" src="https://res.cloudinary.com/practicaldev/image/fetch/s--qWQ9Lcyk--/c_fill,f_auto,fl_progressive,h_90,q_auto,w_90/https://thepracticaldev.s3.amazonaws.com/uploads/user/profile_image/157059/b5026b91-4cc9-42d1-8482-2cb089c251da.jpg">
                        </figure>
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        @if(auth('wink')->check())
                        <a class="navbar-item" href="/wink/team/2aa04e3a-eb4a-404b-b237-207758950705">
                            Profile
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="/wink/posts">
                            Posts
                        </a>
                        <a class="navbar-item" href="/wink/tags">
                            Tags
                        </a>
                        <a class="navbar-item" href="/stats">
                            Stats
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="/wink/logout">
                            Logout
                        </a>
                        @endif
                    </div>
                </div>
            </div>


            </div>
        </div>
    </nav>

