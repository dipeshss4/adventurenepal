@extends('frontend.layouts.master')
@section('content')



    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">
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
                                </ul>
                            </div>
                            <div class="contact_info_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.facebook.com/firstadventurenepal/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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

                {{--<div class="col">--}}
                    {{--<div id="google_map">--}}
                        {{--<div class="map_container">--}}
                            {{--<div id="map"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>

    <!-- Newsletter -->
@endsection
