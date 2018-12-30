@section('footer')
<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Footer Column -->
            <div class="col-lg-4 footer_col">
                <div class="footer_about">
                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <div class="logo_image"><img src="{{URL::to('images/firstcopy.png')}}" alt=""></div>
                        </div>
                    </div>
                    <br><br>
                    <div class="footer_about_text">
                        <h4>About Us</h4>First Adventure Nepal, unit of First Group Nepal is a travel agency company
                        established to promote tourism in Nepal. We are dedicated to provide excellent and personalized
                        service. </div>
                    <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                </div>
            </div>

            <div class="col-lg-4 footer_col">
                <div class="tags footer_tags">
                    <div style="margin:75px;">
                        <img style="height:250px;" src="{{URL::to('images/Nepal.gif')}}" class="rounded float-center" alt="Nepal flag">
                    </div>
                </div>
            </div>


            <!-- Footer Column -->
            <div class="col-lg-4 footer_col">
                <div class="footer_latest">

                        <!-- Footer Latest Post --><br>
                        <div class="footer_about_text"><br>
                            <h4>Contact us</h4>
                            Address: Chabahil, Kathmandu<br>
                            Phone: 9801111901<br>
                            Email: firstadventurenepal@gmail.com
                        </div>



                </div>
            </div>

            <!-- Footer Column -->

        </div>
    </div>
</footer>
</div>


<script src="{{URL::to('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::to('styles/bootstrap4/popper.js')}}"></script>
<script src="{{URL::to('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{URL::to('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::to('plugins/easing/easing.js')}}"></script>
<script src="{{URL::to('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::to('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::to('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::to('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::to('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="https://goo.gl/maps/EyCwUNtbEgk"></script>
<script src="{{URL::to('js/contact_custom.js')}}"></script>
<script src="{{URL::to('js/custom.js')}}"></script>
<script src="{{URL::to('js/news_custom.js')}}"></script>
</body>
</html>
    @endsection
