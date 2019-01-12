<?php

namespace App\Http\Controllers\backend;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.gallery.add-gallery');
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

        $directory = public_path('/images/gallery/');
        $imageUrl = $directory.$fileName;
        Image::make($image)->resize(320, 530)->save($imageUrl);
        $destination= Slider::create([
            'name'          => $request ->input('name'),

            'status'    => $request->input('status'),
            'description'   => $request->input('description'),
            'images'         => $fileName,
        ]);
        if($destination){
            return redirect()->route('destination.index')->with('success','Gallery Sucessfully inserted ');
        }
        else{
            return redirect()->route('destination.add')->with('error','Gallery cannot be inserted');
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
        //
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
        //
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
