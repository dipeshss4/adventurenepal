@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Destination</h4>
            <p class="card-description">
                Add Destination
            </p>
            <form class="forms-sample" action="{{route('destination.update',$destination->id)}}" method="post" enctype="multipart/form-data">
               @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Destination Name</label>
                    <input type="text" class="form-control" value="{{$destination->name}}" name="name" id="exampleInputName1" placeholder=" Destination Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Destination Type</label>
                    <select class="form-control" name="destination_type" >
                        <option  value="International" {{ $destination->destination_type == 'International' ? 'selected' : '' }}> International </option>
                        <option  value="Domestic" {{ $destination->destination_type == 'Domestic' ? 'selected' : '' }}> Domestic </option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail3">Destination Description</label>
                    <textarea class="form-control" name="description" id="editor1" rows="10" cols="80" >
                  {{$destination->description}}
                   </textarea>

                </div>
                @if($destination->is_popular === 1)
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
                    @else
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Popular</label>
                        <div class="col-sm-4">
                            <div class="form-radio">

                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="popular" id="membershipRadios1" value="1"> YES
                                    <i class="input-helper"></i></label>
                            </div>

                        </div>

                        <div class="col-sm-5">
                            <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="popular" id="membershipRadios2" value="0"  checked=""> NO
                                    <i class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>
                @endif

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
