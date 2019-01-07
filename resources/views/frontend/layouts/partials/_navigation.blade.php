<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a href="/en/" class="navbar-item router-link-exact-active router-link-active">
            <img src="http://ratenjoy.com/images/rate.png" alt="Fullstackworld" width="112" height="28"></a>


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
                <a href="{{ route('home') }}" title="Home" class="navbar-item button is-primary is-fullwidt">Home</a>
            </div>

            <div class="navbar-item">
                <a href="{{ route('home') }}" title="About" class="navbar-item has-text-centered-touch">About</a>
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

