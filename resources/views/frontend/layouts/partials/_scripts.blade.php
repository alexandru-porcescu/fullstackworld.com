<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function() {
        var burger = document.querySelector('.navbar-burger');
        var menu = document.querySelector('.navbar-menu');
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();

</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-4403814619182086",
        enable_page_level_ads: true
    });
</script>

<link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "761db262-dc9b-4165-8e3d-8be8e183e2c3",
        });
    });
</script>
@include('bulma::notifications')

@yield('scripts')