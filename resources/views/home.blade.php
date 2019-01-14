@extends('app')
@section('content')

    <div class="flock-community fixed">
        <a href="//LaravelLiveIndia.flock.com?i=8jyqe5q1seeq81j5" target="_blank" class="btn flock-button btn-round">Join our LaravelLive India community</a>
        <a href="//LaravelLiveIndia.flock.com?i=8jyqe5q1seeq81j5" target="_blank"><img src="{{ asset('images/flock.png') }}" class="pulse-flock" height="38" style="height: 75px;"></a>
    </div>

    @include('section.header')
    <!--Banner-->
    @include('section.banner')
    <!--Banner END-->

    <!--ABOUT-->
    @include('section.about')
    <!--ABOUT END-->

    <!--SERVICE-->
    <!-- @include('section.venue') -->
    <!--SERVICE-->

    <!--SPEAKERS-->
    {{-- @include('section.speaker') --}}
    <!--SPEAKERS END-->

    <!--SCHEDULE-->
    {{-- @include('section.schedule') --}}
    <!--SCHEDULE END-->

    <!--SPONSORED-->
    {{-- @include('section.sponsors') --}}
    <!--SPONSORED END-->

    <!--REGISTRATION-->
    {{-- @include('section.registration') --}}
    <!--REGISTRATION END-->

    <!--News-->
    {{-- @include('section.news') --}}
    <!--News END-->

    <!--VIDEO-->
    {{-- @include('section.videos') --}}
    <!--//.VIDEO END-->

    <!--FOOTER-->
    @include('section.footer')
    <!--FOOTER END-->

    {{-- @include('section.subscribePopup') --}}
@endsection
