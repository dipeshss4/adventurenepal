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

    <!-- Find Form -->

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>We are an award winning Agency</h2>
                        <div>take a look at our story</div>
                    </div>
                </div>
            </div>
            <div class="row about_row">
                <div class="col-lg-6 about_col order-lg-1 order-2">
                    <div class="about_content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus. Sed finibus, magna at euismod aliquet, enim justo vulputate lorem, sit amet elementum dolor eros sollicitudin dui. Sed ac magna mauris. Nullam lectus odio, viverra vel mi id, interdum imperdiet nulla. </p>
                        <div class="button about_button"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-6 about_col order-lg-2 order-1">
                    <div class="about_image">
                        <img src="{{URL::to('images/about.jpg')}}" alt="https://unsplash.com/@sanfrancisco">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection



