<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>

<script>
    $('.navbar-burger').click(function () {
        $(this).toggleClass();
        $('#'+$(this).data('target')).toggleClass();
    });
</script>

@include('frontend.layouts.partials._algolia')
@include('frontend.layouts.partials._hotjar')
@include('frontend.layouts.partials._onesignal')

@include('bulma::notifications')

@yield('scripts')