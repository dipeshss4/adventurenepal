@extends('frontend.layouts.master')
@section('content')


    <br><br><br><br>

    <div class="popular">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Our Services</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_kalinchok.jpg')}}" alt="image by Egzon Bytyqi">
                            </a>
                            <div class="">
                                <h4>Flight Booking</h4>
                                <div>flight</div>
                                <div>we serve flight</div>
                            </div>
                        </div>

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_rara.jpg')}}" alt="https://unsplash.com/@michael75">
                            </a>
                            <div class="">
                                <h4>Cycling</h4>
                                <div>flight</div>
                                <div>we serve flights</div>
                            </div>
                        </div>

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_kathmandu.jpg')}}" alt="https://unsplash.com/@sapegin">
                            </a>
                            <div class="">
                                <h4>Trekking</h4>
                                <div>flight</div>
                                <div>we serve flights</div>
                            </div>
                        </div>

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_lumbini.jpg')}}" alt="https://unsplash.com/@kensuarez">
                            </a>
                            <div class="">
                                <h4>Climbing</h4>
                                <div>flight</div>
                                <div>we serve flights</div>
                            </div>
                        </div>

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_ilam.jpeg')}}" alt="https://unsplash.com/@noahbasle">
                            </a>
                            <div class="">
                                <h4>Flight Booking</h4>
                                <div>flight</div>
                                <div>we serve flights</div>
                            </div>
                        </div>

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_pokhara.jpg')}}" alt="https://unsplash.com/@seb">
                            </a>
                            <div class="">
                                <h4>Jungle Safari</h4>
                                <div>flight</div>
                                <div>we serve flights</div>
                            </div>
                        </div>

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_gosaikunda.jpg')}}" alt="https://unsplash.com/@nevenkrcmarek">
                            </a>
                            <div class="">
                                <h4>Rafting</h4>
                                <div>flight</div>
                                <div>we serve flights</div>
                            </div>
                        </div>

                        <!-- Popular Item -->
                        <div class="popular_item service">
                            <a href="#">
                                <img src="{{URL::to('images/package_tilicho.jpg')}}" alt="https://unsplash.com/@bergeryap87">
                            </a>
                            <div class="">
                                <h4>Bungy Junping</h4>
                                <div>flight</div>
                                <div>we serve flights</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<br><br>
@endsection



