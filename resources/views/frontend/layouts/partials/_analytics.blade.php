@if(app()->environment('production'))

    <script async src="{{ config('onicial.analytics.google.url') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ config('onicial.analytics.google.id') }}');

    </script>

@endif
