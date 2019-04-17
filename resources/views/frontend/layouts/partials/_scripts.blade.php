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