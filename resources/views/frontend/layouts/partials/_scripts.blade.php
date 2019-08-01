<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>

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



@include('frontend.layouts.partials._algolia')
@include('frontend.layouts.partials._hotjar')
@include('frontend.layouts.partials._onesignal')

@include('bulma::notifications')

@yield('scripts')

<!--script src="{{ asset('js/app.js') }}"></script-->