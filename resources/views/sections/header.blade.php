<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md bg-dark" style="margin-top:0;">
    <div class="container">
        <a class="navbar-brand logo mt25" href="#">
            {{-- <img src="{{ asset('img/logo.png') }}" alt="Evento"/> --}}
            <h3 class="text-white">Laravel<span style="color:#E74432">Live.</span></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#cfp-countdown">Submit CFP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#about">Event</a>
                </li>
                {{--
                <li class="nav-item">
                    <a class="nav-link " href="#">Speakers</a>
                </li> --}} {{--
                <li class="nav-item">
                    <a class="nav-link " href="#">News</a>
                </li> --}}
            </ul>
        </div>
    </div>
</header>
<!--header end here-->