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
    <meta name="description" content="Event, Conference &amp; Meetup HTML Template">
    <meta name="keywords" content="Event, Conference, Meetup, HTML5">
    <meta name="author" content="httpcoder.com">

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@yourtwitterusername">
    <meta name="twitter:creator" content="@yourtwitterusername">
    <meta name="twitter:url" content="http://yourdomain.com">
    <meta name="twitter:title" content="Your home page title, max 140 char"> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char "> <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-280-150.jpg">
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title">
    <meta property="og:url" content="http://your domain here.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Your site name here">
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg">
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon.ico">
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon.ico">
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="http://httpcoder.com/demo/html/eventpro/view/assets/img/favicon/manifest.json">

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
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/common.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/util.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/stats.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/AuthenticationService.Authenticate') }}"></script>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzfNvH2kifJQ0PhBIyuuG-swdkW1NPQVE"></script>
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

    @stack('script')
</body>

</html>
