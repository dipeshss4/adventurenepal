@extends('frontend.layouts.master')
@section('content')

    <div class="home">
        <div class="home_background" style="background-image:url(images/banner.jpeg)"></div>
        <div class="home_content">
            <div class="home_content_inner">
                {{--<div class="home_text_large">discover</div>--}}
                {{--<div class="home_text_small">Discover new worlds</div>--}}
                @include('frontend.pages.find.find')
            </div>
        </div>
    </div>

    <!-- Find Form -->



    <!-- Top Destinations -->
    @include('frontend.pages.topdestination.topdestination')


    <!-- Last -->




    <!-- Popular -->
    @include('frontend.pages.popular.popular')

    </br></br></br>
    @include('frontend.pages.video.video')


    <!-- Video -->
    <!-- Special -->
    @include('frontend.pages.special.special')


    <!-- Newsletter -->
    {{--@include('frontend.pages.newsletter.newsletter')--}}


@endsection
