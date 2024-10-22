<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TDN</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/styles/guest/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/guest/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/guest/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/guest/banniere.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    @yield('extra-styles')
</head>
<body>
    @include('guest.includes.header')
    @include('guest.includes.navbar')
    @yield('banniere')
    @include('guest.includes.echo')
    <main class="main-container">
        @yield("content")
    </main>
    @include('guest.includes.footer')

    <script src="{{ asset('assets/scripts/guest/app.js') }}"></script>
    <script src="{{ asset('assets/scripts/guest/navbar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/scripts/guest/banniere.js') }}"></script>
</body>
</html>
