<div class="main-nav">
    <div class="container is-fluid">

    <nav class="navbar" role="navigation" aria-label="main navigation">

        <div class="navbar-brand">
            <a href="/" class="navbar-item router-link-exact-active router-link-active">
                <img src="{{ asset('img/logo/main.png') }}" class="logo" alt="Fullstackworld"></a>


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
                    <a href="{{ route('home') }}" title="Blog" class="navbar-item {{ Route::is('home') || (isset($postType) && $postType == 'Post') ? 'button is-primary is-fullwidth' : '' }}">Blog</a>
                </div>

                <div class="navbar-item">
                    <a href="{{ route('journal') }}" title="Journal" class="navbar-item {{ Route::is('journal') || (isset($postType) && $postType == 'Journal') ? 'button is-primary is-fullwidth' : '' }}">Journal</a>
                </div>

                <div class="navbar-item">
                    <a href="{{ route('about') }}" title="About" class="navbar-item {{ Route::is('about') ? 'button is-primary is-fullwidth' : '' }}">About</a>
                </div>

                <div class="navbar-item has-text-centered">
                    <a target="_blank" href="https://github.com/mhetreramesh" title="Github"
                    class="button is-small is-light navbar-icon"><i class="fab fa-github"></i></a>

                    <a target="_blank" href="https://twitter.com/mhetreramesh" title="Twitter"
                    class="button is-small is-light navbar-icon"><i class="fab fa-twitter"></i></a>
                </div>

            </div>

        </div>
    </nav>

    </div>
</div>

