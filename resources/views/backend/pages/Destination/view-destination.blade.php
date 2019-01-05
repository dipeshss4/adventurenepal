@extends('backend.layouts.master')
@section('content')

    <div class="card">
        @if(session()->has('success'))
            <div class="alert alert-success"> {{session()->get('success')}}</div>
        @else
            <div class="alert alert-danger"> {{session()->get('error')}}</div>
        @endif
        <div class="table-responsive">


            <table class="table table-striped">
                <thead>
                <tr>
                    <th>
                        Image
                    </th>
                    <th>
                        Destination Name
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Status
                    </th>
                    <th> Action </th>
                </tr>
                </thead>

                <tbody>
                @foreach($destination as $key=> $newdestination)
                    <tr>
                        <td class="py-1">
                            <img src="{{URL::to('/images/destination',$newdestination->images)}}" alt="image">
                        </td>
                        <td>
                            {{$newdestination->name}}
                        </td>
                        <td>
                            {{$newdestination->destination_type}}
                        </td>
                        <td>
                            {{$newdestination->description}}
                        </td>
                        <td>
                            @if($newdestination->status ===1)
                                <label class="badge badge-success">Active</label>
                            @else
                                <label class="badge badge-danger">Deactive</label>
                            @endif

                        </td>
                        <td>
                            <a href="{{route('destination.edit',$newdestination->id)}}"><button class="btn btn-outline-primary">Edit</button></a>
                            <form class="form-group pull-right" action="" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="Delete" />
                                <button type="submit" class="btn btn-outline-danger" align="right" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection
