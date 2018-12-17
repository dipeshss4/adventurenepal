@extends('frontend.layouts.master')
@section('content')

    <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <div class="menu_search_form_container">
                    <form action="#" id="menu_search_form">
                        <input type="search" class="menu_search_input menu_mm">
                        <button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
                    </form>
                </div>
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="#">Home</a></li>
                    <li class="menu_item menu_mm"><a href="about.html">About us</a></li>
                    <li class="menu_item menu_mm"><a href="offers.html">Offers</a></li>
                    <li class="menu_item menu_mm"><a href="news.html">News</a></li>
                    <li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
                </ul>

                <!-- Menu Social -->

                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
            </div>

        </div>

    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_background" style="background-image:url(images/home.jpg)"></div>
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
