@if(!empty($page))
    <title>Page Title | Full Stack World</title>
    <meta name="description" content="{{ $page->description }}" />
    <meta name="keywords" content="{{ $page->keywords }}" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:description" content="{{ $page->description }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="{{ asset('img/meta.jpg')}}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@mhetreramesh" />
    <meta name="twitter:creator" content="@mhetreramesh" />
    <meta name="twitter:title" content="{{ $page->title }}" />
    <meta name="twitter:description" content="{{ $page->description }}" />
    <meta name="twitter:image" content="{{ asset('img/meta.jpg') }}" />
@elseif(!empty($selectedPost))
    <title>{{$selectedPost->title}} | Full Stack World</title>
    <meta name="description" content="{{ $selectedPost->meta['meta_description'] }}" />
    <meta name="keywords" content="{{ $selectedPost->meta['opengraph_title'] }}" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $selectedPost->meta['opengraph_title'] ?: $selectedPost->title }}" />
    <meta property="og:description" content="{{ $selectedPost->meta['opengraph_description'] ?: $selectedPost->meta_description }}" />
    <meta property="og:site_name" content="FullStackWorld" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="{{ $selectedPost->meta['opengraph_image'] ?: ($selectedPost->featured_image ?: asset('img/placeholder.png')) }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@mhetreramesh" />
    <meta name="twitter:creator" content="@mhetreramesh" />
    <meta name="twitter:title" content="{{ $selectedPost->meta['twitter_title'] ?: $selectedPost->title }}" />
    <meta name="twitter:description" content="{{ $selectedPost->meta['twitter_description'] ?: $selectedPost->meta_description }}" />
    <meta name="twitter:image" content="{{ $selectedPost->meta['twitter_image'] ?: ($selectedPost->featured_image ?: asset('img/placeholder.png')) }}"/>
@elseif(!empty($pageTitle))
    <title>{{$pageTitle}} | Full Stack World</title>
@else
    <title>Full Stack World</title>
@endif

<meta name="robots" content="index,follow" />

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

<link rel="manifest" href="{{ asset('img/favicons//manifest.json') }}">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('img/favicons//ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">