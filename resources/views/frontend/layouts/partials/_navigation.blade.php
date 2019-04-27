<div class="main-nav">
    <div class="container is-widescren">

    <nav class="navbar" role="navigation" aria-label="main navigation">

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

                <div class="navbar-item">
                    <a href="{{ route('tags', ['slug' => 'laravel']) }}" title="Laravel" class="navbar-item {{ Route::is('tags') && Request::is(['laravel', 'laravel-news', 'laravel-packages']) ? 'button is-primary is-fullwidth' : '' }}">
                        <i class="fab fa-laravel has-text-orange"></i>&nbsp;Laravel
                    </a>
                </div>

                <div class="navbar-item">
                    <a href="{{ route('tags', ['slug' => 'vuejs']) }}" title="Vue.js" class="navbar-item {{ Route::is('tags') && Request::is(['vuejs', 'vuejs-news', 'vuejs-packages']) ? 'button is-primary is-fullwidth' : '' }}">
                        <i class="fab fa-vuejs has-text-green"></i>&nbsp;Vue.js
                    </a>
                </div>

                <div class="navbar-item">
                    <a href="{{ route('tags', ['slug' => 'angular']) }}" title="Angular" class="navbar-item {{ Route::is('tags') && Request::is(['angular', 'angular-news', 'angular-packages']) ? 'button is-primary is-fullwidth' : '' }}">
                        <i class="fab fa-angular has-text-danger"></i>&nbsp;Angular
                    </a>
                </div>

                <div class="navbar-item">
                    <a href="{{ route('blog') }}" title="Blog" class="navbar-item {{ Route::is('blog') ? 'button is-primary is-fullwidth' : '' }}">
                        <i class="fas fa-list-ul is-info"></i>&nbsp;Blog</a>
                </div>

                <div class="navbar-item has-text-centered">
                    <div class="control has-icons-left">
                        <input type="text" class="input is-large" placeholder="SEARCH" id="main-search" name="main-search">
                    </div>
                </div>

            </div>

        </div>
    </nav>

    </div>
</div>

