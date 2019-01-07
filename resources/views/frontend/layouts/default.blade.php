<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('frontend.layouts.partials._meta')
    @include('frontend.layouts.partials._styles')
    @include('frontend.layouts.partials._analytics')

</head>
<body>

<section class="bd-tws-home section">

        <div class="columns is-centered main-nav">

            <div class="column is-9">
                @include('frontend.layouts.partials._navigation')

            </div>

        </div>
    <div class="container">

        @yield('content')

    </div>
    @include('frontend.layouts.partials._footer')


</section>

@include('frontend.layouts.partials._scripts')

</body>
</html>