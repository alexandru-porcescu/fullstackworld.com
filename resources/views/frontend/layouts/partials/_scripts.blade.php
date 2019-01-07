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

<script>
    document.querySelectorAll('.modal-button').forEach(function(el) {
        el.addEventListener('click', function() {
            var target = document.querySelector(el.getAttribute('data-target'));

            target.classList.add('is-active');

            target.querySelector('.modal-close').addEventListener('click',   function() {
                target.classList.remove('is-active');
            });
        });
    });
</script>

@include('bulma::notifications')

@yield('scripts')