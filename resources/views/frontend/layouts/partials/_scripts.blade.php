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
@include('bulma::notifications')

@yield('scripts')