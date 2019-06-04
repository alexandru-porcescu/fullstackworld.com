@if(!auth('wink')->check())
    @include('frontend.layouts.partials.modals.login')
    @include('frontend.layouts.partials.modals.register')
@endif