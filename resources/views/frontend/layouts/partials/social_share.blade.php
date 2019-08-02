<nav class="navbar is-fixed-bottom footer-nav">
    <div class="container is-widescreen is-mobile">
        <div class="navbar-brand">
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="socialShareMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="socialShareMenu">
            <div class="navbar-start">
                @if($selectedPost)
                    <div class="navbar-item">
                        <span class="button is-outlined" style="height: 2.7rem">
                            <i class="far fa-eye"></i>&nbsp;{{views($selectedPost)->count()}}
                        </span>
                    </div>
                @endif
                <div class="navbar-item">
                    <vue-goodshare-facebook
                            button_design="outline"
                            has_counter
                            has_icon
                    ></vue-goodshare-facebook>
                </div>
                <div class="navbar-item">
                    <vue-goodshare-twitter
                            button_design="outline"
                            has_icon
                    ></vue-goodshare-twitter>
                </div>
                <div class="navbar-item">
                    <vue-goodshare-whats-app
                            button_design="outline"
                            has_icon
                    ></vue-goodshare-whats-app>
                </div>
                <div class="navbar-item">
                    <vue-goodshare-reddit
                            button_design="outline"
                            has_icon
                    ></vue-goodshare-reddit>
                </div>
            </div>

            <div class="navbar-end ">

                <div class="navbar-item">
                    <a class="button is-primary is-rounded is-outlined" target="_blank" href="https://github.com/fullstackworld/fullstackworld.com">
                        <i class="fab fa-github"></i>&nbsp;Contribute on GitHub</a>
                </div>

            </div>
        </div>
    </div>
</nav>