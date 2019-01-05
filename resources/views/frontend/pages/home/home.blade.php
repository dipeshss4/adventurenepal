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

    <div class="popular">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Popular destinations in 2018</h2>
                        <div>take a look at these offers</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">

                        <!-- Popular Item -->
                        @foreach($destination as $newdestination)
                            <div class="popular_item">
                                <a href="offers.html">
                                    <img src="{{URL::to('images/destination',$newdestination->images)}}" alt="image by Egzon Bytyqi">
                                    <div class="popular_item_content">
                                        <div class="popular_item_price">From $890</div>
                                        <div class="popular_item_title">{{$newdestination->name}}</div>
                                    </div>
                                </a>
                            </div>
                          @endforeach
                    <!-- Popular Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    </br></br></br>
    @include('frontend.pages.video.video')


    <!-- Video -->
    <!-- Special -->
    @include('frontend.pages.special.special')


    <!-- Newsletter -->
    {{--@include('frontend.pages.newsletter.newsletter')--}}


@endsection
