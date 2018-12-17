@section('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Destino</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Destino project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
                                <li class="main_nav_item"><a href="about.html">About us</a></li>
                                <li class="main_nav_item"><a href="services.html">Services</a></li>
                                <li class="main_nav_item"><a href="blogs.html">Blogs</a></li>
                                <li class="main_nav_item"><a href="contact.html">Contact</a></li>
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
    @endsection

