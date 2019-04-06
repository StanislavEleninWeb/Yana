<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Request Validate Post
use App\Http\Requests\Image\StoreImagePost;
use App\Http\Requests\Image\UpdateImagePost;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image.admin.index', [
            'images' => Image::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('image.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagePost $request)
    {
        if(!$request->hasFile('image')){
            return back()->with('error', 'Failed uploading image!');
        }
        
        $file_name = md5(time());
        $file_ext = $request->image->getClientOriginalExtension();
        $file_destination = public_path().'/images/';

        $image = Image::create([
            'file_name' => $file_name,
            'file_ext' => $file_ext,
            'author' => $request->author,
            'title' => $request->title,
        ]);
       
        $request->image->move($file_destination.intval($image->id/1000), $file_name.'.'.$file_ext);

        return redirect()->route('admin.image.edit', $image->id)->with('success', 'Image uploaded successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('image.admin.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('image.admin.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImagePost $request, Image $image)
    {
        $image->update($request->validated());

        return back()->with('success', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->back();
    }
}
