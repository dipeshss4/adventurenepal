@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h4 class="card-title"> Gallery</h4>
            <p class="card-description">
                Add Gallery
            </p>
            <form class="forms-sample" action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Gallery Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder=" Destination Name">
                </div>


                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-4">
                        <div class="form-radio">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="popular" id="membershipRadios1" value="1" checked=""> Active
                                <i class="input-helper"></i></label>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-radio">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="popular" id="membershipRadios2" value="0"> Deactive
                                <i class="input-helper"></i></label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <script>
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            });
        });
    </script>

@endsection
@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h4 class="card-title"> Destination</h4>
            <p class="card-description">
                Add Destination
            </p>
            <form class="forms-sample" action="{{route('destination.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Destination Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder=" Destination Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Destination Type</label>
                    <select class="form-control" name="destination_type" >
                        <option > International </option>
                        <option> Domestic </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail3">Destination Description</label>
                    <textarea class="form-control" name="description" id="editor1" rows="10" cols="80">
                   This is my textarea to be replaced with CKEditor.
                   </textarea>

                </div>



                <div class="form-group">
                    <label>Upload Image</label>
                    <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="image">
                </span>
            </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <img id='img-upload'/>

                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Popular</label>
                    <div class="col-sm-4">
                        <div class="form-radio">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="popular" id="membershipRadios1" value="1" checked=""> YES
                                <i class="input-helper"></i></label>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-radio">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="popular" id="membershipRadios2" value="0"> NO
                                <i class="input-helper"></i></label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    {{--<script>--}}
        {{--$(document).ready( function() {--}}
            {{--$(document).on('change', '.btn-file :file', function() {--}}
                {{--var input = $(this),--}}
                    {{--label = input.val().replace(/\\/g, '/').replace(/.*\//, '');--}}
                {{--input.trigger('fileselect', [label]);--}}
            {{--});--}}

            {{--$('.btn-file :file').on('fileselect', function(event, label) {--}}

                {{--var input = $(this).parents('.input-group').find(':text'),--}}
                    {{--log = label;--}}

                {{--if( input.length ) {--}}
                    {{--input.val(log);--}}
                {{--} else {--}}
                    {{--if( log ) alert(log);--}}
                {{--}--}}

            {{--});--}}
            {{--function readURL(input) {--}}
                {{--if (input.files && input.files[0]) {--}}
                    {{--var reader = new FileReader();--}}

                    {{--reader.onload = function (e) {--}}
                        {{--$('#img-upload').attr('src', e.target.result);--}}
                    {{--}--}}

                    {{--reader.readAsDataURL(input.files[0]);--}}
                {{--}--}}
            {{--}--}}

            {{--$("#imgInp").change(function(){--}}
                {{--readURL(this);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

@endsection
