@section('footer')
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{URL::to('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{URL::to('vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{URL::to('js/off-canvas.js')}}"></script>
<script src="{{URL::to('js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{URL::to('js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>
@endsection
