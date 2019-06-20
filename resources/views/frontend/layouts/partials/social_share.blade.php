<nav class="navbar is-fixed-bottom footer-nav">
    <div class="container">
        <div class="navbar-brand">
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="socialShareMenu">
                <span class="fa fa-share-alt">
                </span>
            </a>
        </div>
        <div class="navbar-menu" id="socialShareMenu">
            <div class="navbar-start">
                <div class="navbar-item">
                    <vue-goodshare-facebook
                            button_design="outline"
                            has_counter
                            has_icon
                    ></vue-goodshare-facebook>
                </div>
                <div class="navbar-item">
                    <vue-goodshare-linked-in
                            button_design="outline"
                            has_icon
                            has_counter
                    ></vue-goodshare-linked-in>
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
                    <a class="button is-rounded" target="_blank" href="https://github.com/fullstackworld/fullstackworld.com"><i class="fab fa-github"></i>&nbsp;Contribute on GitHub</a>
                </div>

            </div>
        </div>
    </div>
</nav>
<style>
    .navbar .container {
        display: flex;
    }
    .navbar-item {
        display: flex;
        align-items: center;
    }
</style>