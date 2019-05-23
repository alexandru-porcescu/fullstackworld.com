<!DOCTYPE html>
<html lang="en" class="font-sans antialiased">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FullStackWorld. — Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Style sheets-->
    <link href='{{mix('light.css', 'vendor/wink')}}' rel='stylesheet' type='text/css'>

    <!-- Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicons/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicons/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-icon-180x180.png') }}" />

    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicons/android-icon-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicons/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}" />
</head>
<body class="text-text-color mb-20">
<div class="container mt-20">
    <div class="xl:w-1/2 mx-auto">
        <div class="flex items-center mb-10">
            <h2 class="mr-2 font-semibold font-serif" :class="{'hidden': hideLogoOnSmallScreens, 'sm:block': hideLogoOnSmallScreens}">
                <a href="/" class="navbar-item router-link-exact-active router-link-active">
                    <img width="200" src="{{ asset('img/logo/main.png') }}" class="logo" alt="Fullstackworld">
                </a>
            </h2>

            <h2 class="font-normal">— Log In</h2>
        </div>

        @if ($errors->any())
            <div class="font-semibold text-red mb-4">
                @if ($errors->has('email'))
                    {{ $errors->first('email') }}
                @else
                    {{ $errors->first('password') }}
                @endif
            </div>
        @endif

        @if(session()->has('loggedOut'))
            <div class="font-semibold text-green mb-4">
                You've been logged out.
            </div>
        @endif

        <form method="POST" action="{{route('wink.auth.attempt')}}">
            @csrf

            <div class="input-group">
                <label for="email" class="input-label">Email Address</label>
                <input type="email" class="input"
                       name="email" id="email"
                       placeholder="mail@example.com">
            </div>

            <div class="input-group mb-5">
                <label for="password" class="input-label">Password</label>
                <input type="password" class="input"
                       name="password" id="password"
                       placeholder="******">
            </div>

            <div class="flex items-center mb-10">
                <div class="flex items-center mr-auto">
                    <input type="checkbox" class="-mt-1 mr-2" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>

                <a href="{{route('wink.password.forgot')}}" class="no-underline text-primary">Forgot your password?</a>
            </div>

            <button type="submit" class="btn-primary">Login</button>
        </form>
    </div>
</div>

</body>
</html>
