<!DOCTYPE html>
<!-- saved from url=(0060)http://httpcoder.com/demo/html/eventpro/view/home-typed.html -->
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths gr__httpcoder_com"
    lang="en" style="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Laravel Event, Laravel Conference, laravel php conference, laravel India conference">
    <meta name="keywords" content="Laravel Event, Laravel Conference, laravel php conference, laravel India conference">
    <meta name="author" content="team laravellive">
    <meta name="theme-color" content="#EE4E38">

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@laravelliveIN">
    <meta name="twitter:creator" content="@laravelliveIN">
    <meta name="twitter:url" content="http://laravellive.in">
    <meta name="twitter:title" content="LaravelLive India Conference 2019"> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Laravel Event, Laravel Conference, laravel php conference, laravel India conference"> <!-- maximum 140 char -->
    <meta name="twitter:image" content="http://laravellive.in/images/bombay--2092174-11.jpg">
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="LaravelLive India Conference 2019">
    <meta property="og:url" content="http://laravellive.in">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Laravel Live">
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://laravellive.in/images/bombay--2092174-11.jpg">
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    <link rel="manifest" href="/manifest.json">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="all">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" media="all">
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css') }}">
    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" media="all">
    <!-- POPUP-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" media="all">
    <!-- MASTER  STYLESHEET  -->
    <link id="csi-master-style" rel="stylesheet" href="{{ asset('css/style-red.min.css') }}" media="all">
    <!-- MODERNIZER CSS  -->
    <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/demo-themeoptions.css') }}" media="all">
    {{-- <script type="text/javascript" charset="UTF-8" src="{{ asset('js/common.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/util.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/stats.js') }}"></script> --}}
    {{-- <script type="text/javascript" charset="UTF-8" src="{{ asset('js/AuthenticationService.Authenticate') }}"></script> --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127639101-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127639101-1');
    </script>


</head>

<body class="home" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
    <div class="csi-container ">
       @section('content')
        @show
    </div>
    <!-- JQUERY  -->
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <!-- BOOTSTRAP JS  -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- SKILLS SCRIPT  -->
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzfNvH2kifJQ0PhBIyuuG-swdkW1NPQVE"></script> --}}
    <!-- CUSTOM GOOGLE MAP -->
    <script src="{{ asset('js/jquery.googlemap.js') }}"></script>
    <!-- Owl Carousel  -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- type js -->
    <script src="{{ asset('js/typed.min.js') }}"></script>
    <!-- COUNTDOWN   -->
    <script src="{{ asset('js/countdown.js') }}"></script>
    <!-- SMOTH SCROLL -->
    <script src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>


    <!-- adding magnific popup js library -->
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

    <!-- SMOTH SCROLL -->
    <script src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>


    <!-- CUSTOM SCRIPT  -->
    <script src="{{ asset('js/custom.script.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/embed.js') }}" data-dojo-config="usePlainJson: true, isDebug: false"></script>

    <script>
        function showMailingPopUp() {
            require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us15.list-manage.com","uuid":"a80aa20a6604dcef64860c596","lid":"245bde01ba"}) })
            document.cookie = "MCPopupClosed=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
        };
    </script>
    
    @stack('script')
</body>

</html>
