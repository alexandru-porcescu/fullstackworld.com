<script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $( document ).ready(function() {
        function toggleModalClasses(event) {
            var modalId = event.currentTarget.dataset.modalId;
            var modal = $(modalId);
            modal.toggleClass('is-active');
            $('html').toggleClass('is-clipped');
        };

        $('.open-modal').click(toggleModalClasses);

        $('.close-modal').click(toggleModalClasses);

        $(document).keyup(function(e) {
            if (e.keyCode === 27) {
                $('.modal').removeClass('is-active');
            }
        });

        $('.navbar-burger').click(function () {
            $(this).toggleClass('is-active');
            $('#'+$(this).data('target')).toggleClass('is-active');
        });
    });
</script>
@include('frontend.layouts.partials._algolia')
@include('frontend.layouts.partials._hotjar')
@include('frontend.layouts.partials._onesignal')

@include('bulma::notifications')

@yield('scripts')

<script src="{{ asset('js/app.js') }}"></script>