@extends('app') 
@section('content')
<!--Header start -->
    @include('sections.header')
<!--Header end -->
    @include('sections.slider')
    @include('sections.countdown')
    @include('sections.event-info')
    @include('sections.about')


<!--Speakers -->
{{--
    @include('sections.speakers') --}}

<!--Price -->
{{--
    @include('sections.price') --}}

<!--Calender -->
{{--
    @include('sections.calender') --}}

<!--Sponsors -->
{{--
    @include('sections.sponsors') --}}

<!--Tickets -->
{{--
    @include('sections.tickets') --}}


<!--footer start -->
    @include('sections.footer')
    @include('sections.copywrite')
    @include('sections.subscribePopup')

<!--footer end -->
@endsection