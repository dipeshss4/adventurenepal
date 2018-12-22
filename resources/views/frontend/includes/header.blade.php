@section('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Destino</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Destino project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{URL::to('styles/bootstrap4/bootstrap.min.css')}} ">
    <link href="{{URL::to('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link href="{{URL::to('plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('styles/responsive.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_container d-flex flex-row align-items-center justify-content-start">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <div>destino</div>
                                <div>travel agency</div>
                                <div class="logo_image"><img src="images/logo.png" alt=""></div>
                            </div>
                        </div>

                        <!-- Main Navigation -->
                        <nav class="main_nav ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item active"><a href="#">Home</a></li>
                                <li class="main_nav_item"><a href="{{route('about.index')}}">About us</a></li>
                                <li class="main_nav_item"><a href="services.html">Services</a></li>
                                <li class="main_nav_item"><a href="blogs.html">Blogs</a></li>
                                <li class="main_nav_item"><a href="{{route('contact.index')}}">Contact</a></li>
                            </ul>
                        </nav>

                        <!-- Search -->
                        {{--<div class="search">--}}
                            {{--<form action="#" class="search_form">--}}
                                {{--<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">--}}
                                {{--<button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                        <!-- Hamburger -->
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </header>
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
    <header>
    </div>
    @endsection

