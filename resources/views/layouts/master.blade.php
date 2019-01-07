<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@include('frontend.layouts.partials._meta')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hello World!</title>

    @include('frontend.layouts.partials._styles')

</head>
<body>

<section class="section">
    <div class="container">

        @include('frontend.layouts.partials._navigation')

        @yield('content')

        @include('frontend.layouts.partials._footer')

        @include('bulma::notifications')

        @include('frontend.layouts.partials._scripts')

    </div>

</section>


</body>
</html>