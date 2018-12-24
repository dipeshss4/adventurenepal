@extends('frontend.layouts.master')
@section('content')




    <!-- Home -->

    {{--<div class="home">--}}
        {{--<!-- Image by https://unsplash.com/@peecho -->--}}
        {{--<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{URL::to('images/about_background.jpg')}}" data-speed="0.8"></div>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col">--}}
                    {{--<div class="home_content">--}}
                        {{--<div class="home_content_inner">--}}
                            {{--<div class="home_title">About us</div>--}}
                            {{--<div class="home_breadcrumbs">--}}
                                {{--<ul class="home_breadcrumbs_list">--}}
                                    {{--<li class="home_breadcrumb"><a href="index.html">Home</a></li>--}}
                                    {{--<li class="home_breadcrumb">About us</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <br><br><br><br><br>

    <!-- Find Form -->

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Who are we?</h2>
                        {{--<div>take a look at our story</div>--}}
                    </div>
                </div>
            </div>
            <div class="row about_row">
                <div class="col-lg-6 about_col order-lg-1 order-2">
                    <div class="about_content">
                        <p align="justify">
                            <strong>First Adventure Nepal</strong>, unit of First Group Nepal is a travel agency company established to promote tourism in Nepal. We are dedicated to provide excellent and personalized service.
                            We will guide you to explore the beauty of Nepal from the top of world’s highest mountain till the lowlands of Terai. We offer trekking, hiking, climbing, jungle safari, mountaineering, scenic & cultural tours, historical tours, wilderness expeditions, special interest tours, family adventures or group holidays in Nepal. We are always ahead for your safety and pleasure, and more conscious to make your holiday is memorable and enjoyable in the best way possible. Our goal is to fulfill your dreams!

                            As Nepal is preparing to host Visit Nepal 2020, we are specially focused to make it a grand success. <strong>Jay Nepal !!!</strong>
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 about_col order-lg-2 order-1">
                    <div class="about_image">
                        <img src="{{URL::to('images/map.png')}}" alt="https://unsplash.com/@sanfrancisco">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection



