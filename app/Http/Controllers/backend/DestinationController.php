<?php

namespace App\Http\Controllers\backend;

use App\destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\Facades\Image;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination = destination::all();
        return view('backend.pages.destination.view-destination',compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.Destination.add-destination');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'name'                => 'required|string',
           'destination_type'    => 'required|string',
           'popular'             => 'required|string',
           'description'         => 'required|string',
           ]);

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $fileName = $imageName;

        $directory = public_path('/images/destination/');
        $imageUrl = $directory.$fileName;
        Image::make($image)->resize(200, 200)->save($imageUrl);
       $destination= destination::create([
           'name'          => $request ->input('name'),
           'destination_type'   => $request->input('destination_type'),
           'is_popular'    => $request->input('popular'),
           'description'   => $request->input('description'),
           'remarks'       => "test",
           'images'         => $fileName,
       ]);
       if($destination){
           return redirect()->route('destination.index')->with('success','Destination Sucessfully inserted ');
       }
       else{
           return redirect()->route('destination.add')->with('error','Destination cannot be inserted');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destination=Destination::findorfail($id);
        return view('backend.pages.destination.edit-destination',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//          $this->validate($request,[
//                   'name'                => 'required|string',
//                   'destination_type'    => 'required|string',
//                   'popular'             => 'required|string',
//                   'description'         => 'required|string',
//                   ]);


               $destination= destination::where('id',$id)->update([
                   'name'          => $request ->input('name'),
                   'destination_type'   => $request->input('destination_type'),
                   'is_popular'    => $request->input('popular'),
                   'description'   => $request->input('description'),
                   'remarks'       => "test",

               ]);
               if($destination){
                   return redirect()->route('destination.index')->with('success','Destination Sucessfully inserted ');
               }
               else{
                   return redirect()->route('destination.add')->with('error','Destination cannot be inserted');
               }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
