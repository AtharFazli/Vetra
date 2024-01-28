<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        @yield('title')
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/font-awesome.min.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('/frontend/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        @include('frontend.layout.header')

        @yield('index')

        @include('frontend.layout.footer')

        <script src="{{ asset('/frontend/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('/frontend/js/bootstrap.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="{{ asset('/frontend/js/custom.js') }}"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
        </script>
        <!-- End Google Map -->


</body>

</html>
