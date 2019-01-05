@extends('frontend.layouts.master')
@section('content')

<<<<<<< HEAD
    <!-- Home -->

    <div class="home">
        <!-- Image by https://unsplash.com/@peecho -->
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{URL::to('images/news.jpg')}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    {{--<div class="home_content">--}}
                        {{--<div class="home_content_inner">--}}
                            {{--<div class="home_title">Contact</div>--}}
                            {{--<div class="home_breadcrumbs">--}}
                                {{--<ul class="home_breadcrumbs_list">--}}
                                    {{--<li class="home_breadcrumb"><a href="index.html">Home</a></li>--}}
                                    {{--<li class="home_breadcrumb">Contact</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
=======

>>>>>>> d146bd114dee7bff3bcc280306425e51b2ce3297

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">
<<<<<<< HEAD
                <div class="col">
                    <div class="contact_title">Get in touch</div>
                    <div class="contact_subtitle">say hello</div>
                </div>
            </div>
            <div class="row contact_content">
                <div class="col-lg-5">
                    <div class="contact_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</p>
                    </div>
                    <div class="contact_info">
                        <div class="contact_info_box">i</div>
                        <div class="contact_info_container">
                            <div class="contact_info_content">
                                <ul>
                                    <li>Address: 1481 Creekside Lane Avila Beach, CA 93424</li>
                                    <li>Phone: +53 345 7953 32453</li>
                                    <li>Email: miloThemes@gmail.com</li>
=======
                    <div class="col">
                        <div class="section_title text-center">
                            <h2>Contact us</h2>
                            {{--<div>take a look at our story</div>--}}
                        </div>
                    </div>
            </div>
            <div class="row contact_content">
                <div class="col-lg-5">
                    <div class="contact_info">
                        <div class="contact_info_container">
                            <div class="contact_info_content">
                                <ul>
                                    <li>Address: Chabahil, Kathmandu</li>
                                    <li>Phone: 9801111901</li>
                                    <li>Email: firstadventurenepal@gmail.com</li>
>>>>>>> d146bd114dee7bff3bcc280306425e51b2ce3297
                                </ul>
                            </div>
                            <div class="contact_info_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact_form_container">
                        <form action="#" id="contact_form" class="clearfix">
                            <input id="contact_input_name" class="contact_input contact_input_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                            <input id="contact_input_email" class="contact_input contact_input_email" type="text" placeholder="E-mail" required="required" data-error="E-mail is required.">
                            <input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Subject">
                            <textarea id="contact_input_message" class="contact_message_input contact_input_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row contact_map">
                <!-- Google Map -->

                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <!-- Image by https://unsplash.com/@garciasaldana_ -->
        <div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="newsletter_content">
                        <div class="newsletter_title text-center">Subscribe to our Newsletter</div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
                                    <input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
                                    <button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
