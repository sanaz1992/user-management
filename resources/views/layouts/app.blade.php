<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <!--titre-toolbar -->
    <title>rasam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="h-hn" />
    <meta name="robots" content="index, follow" />
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://tandiskavir.com/images/logo" />
    <meta property="og:title" content=" فرش " />
    <meta property="og:description" content=" فرش " />
    <meta property="og:url" content="https://rasam.com" />
    <meta property="og:site_name" content="فرش " />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=" فرش " />
    <meta name="keywords" content=" فرش " />
    <meta name="UI Designer" content="ITSA CO | t-gh شرکت آیتن" />
    <meta name="Developer" content="ITSA CO | شرکت آیتن" />
    <meta name="geo.region" content="IR" />
    <meta name="geo.placename" content="Kashan" />
    <meta name="geo.position" content="33.981575;51.433391" />
    <meta name="ICBM" content="33.981575, 51.433391" />
    <meta name="GOOGLEBOT" content="index, follow" />
    <!-- logo-toolbar -->
    <link href="images/logo.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/css/bootstrap-dropdownhover.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/css/iconmoon.css') }}" />
    <!--style-detaILE-last-product -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/scss/main.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/template/css/my-style.css') }}" />
</head>

<body>

    <!--body-site -->
    <main class="last-product">
        <!--start-baner -->
        @yield('banner')
        <!-- end-box-h1 -->

        @yield('content')

    </main>

    @include('layouts.footer')

    <div id="topcontrol">
        <span class="icon-small-up-arrows-in-a-circle top-icon"></span>
    </div>
    <!-- The JavaScript -->
    <script src="{{ asset('/template/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/template/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/template/js/bootstrap-dropdownhover.js') }}"></script>
    <script src="{{ asset('/template/js/jquery.unav.js') }}"></script>
    <script src="{{ asset('/template/js/jQuery.print.js') }}"></script>
    <script src="{{ asset('/template/js/jquery.easing.1.3.js') }}"></script>

    <!-- js-me -->
    <script src="{{ asset('/template/js/base.js') }}"></script>
    <script src="{{ asset('/template/js/cart.js') }}"></script>
</body>

</html>
