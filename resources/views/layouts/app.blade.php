<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href=" {{ asset('vendors/font-awesome/css/fontawesome.css') }}" />
    <link rel="stylesheet" href=" {{ asset('vendors/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href=" {{ asset('vendors/slick/slick.css') }}" />
    <link rel="stylesheet" href=" {{ asset('vendors/animate.css') }}" />
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}" />



</head>
<body>

    <div class="home-outer">
        <div id="site-wrapper" class="site-wrapper home-main">
            @yield('header')
            
            @yield('content')

            @yield('footer')

        </div>
    </div>

    
    <!-- Add scripts to that -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src=" {{ asset('vendors/jquery.min.js') }}"></script>
    <script src=" {{ asset('vendors/popper/popper.js') }}"></script>
    <script src=" {{ asset('vendors/bootstrap/js/bootstrap.js') }}"></script>
    <script src=" {{ asset('vendors/hc-sticky/hc-sticky.js') }}"></script>
    <script src=" {{ asset('vendors/isotope/isotope.pkgd.js') }}"></script>
    <script src=" {{ asset('vendors/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src=" {{ asset('vendors/slick/slick.js') }}"></script>
    <script src=" {{ asset('vendors/waypoints/jquery.waypoints.js') }}"></script>

    <script src="{{ asset('vendors/theme.js') }}"></script>

</body>
</html>
