@extends('app')
@section('content')
    @include('section.header')
    <!--Banner-->
    @include('section.banner')
    <!--Banner END-->

    <!--ABOUT-->
    @include('section.about')
    <!--ABOUT END-->

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
