<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="keywords" content="Laravel conference">
    <meta name="author" content="Bitfumes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> {{ config('app.name') }}</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    {{--
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/et-line.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
    
@section('content') @show

    <!-- jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!--slick carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--parallax -->
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <!--Counter up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!--Counter down -->
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>