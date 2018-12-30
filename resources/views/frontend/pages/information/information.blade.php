@extends('frontend.layouts.master')
@section('content')
<br><br><br><br>
    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Posts -->
                <div class="col-lg-9">
                    <div class="news_posts">

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="post_title"><h2>Top destinations in Europe</h2></div>

                            <div class="post_image">
                                <img src="{{URL::to('images/news_1.jpg')}}" alt="https://unsplash.com/@simonmigaj">
                                {{--<a href="#"><div class="post_image_box text-center">+</div></a>--}}
                            </div>
                            <div class="post_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">

                        <!-- Featured Posts -->
                        <div class="sidebar_featured">

                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Number</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter your number">
                                </div>
                                <button type="submit" class="btn btn-primary">Request details</button>
                            </form>

                            <!-- Featured Post -->
                            <div class="sidebar_featured_post">
                                <div class="sidebar_featured_image"><img src="{{URL::to('images/sidebar_featured_1.jpg')}}" alt=""></div>
                                {{--<div class="sidebar_featured_title"><a href="#">Top destinations in Europe</a></div>--}}

                            </div>

                            <!-- Featured Post -->
                            <div class="sidebar_featured_post">
                                <div class="sidebar_featured_image"><img src="{{URL::to('images/sidebar_featured_2.jpg')}}" alt=""></div>
                                {{--<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>--}}
                            </div>

                            <!-- Featured Post -->
                            <div class="sidebar_featured_post">
                                <div class="sidebar_featured_image"><img src="{{URL::to('images/sidebar_featured_3.jpg')}}" alt=""></div>
                                {{--<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>--}}
                            </div>

                        </div>

                        <!-- Offers -->



                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Newsletter -->




@endsection
