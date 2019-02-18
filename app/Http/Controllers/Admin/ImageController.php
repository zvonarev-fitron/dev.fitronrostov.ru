<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Helpers\CUtils;



class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

//        $params['images'] = \App\Image::all();
//        return view('admin.images.index', compact('params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '';
        if($request->hasFile('upload')) {
            $path = Storage::url($request->file('upload')->store('/FTUploads'));
            CUtils::ImageResize(storage_path('app/public') . $path, 1076, 576);
        }
        \App\Image::create([
            'slider_id' => $request->slider_id,
            'image' => $path,
            'url' => $request->url,
            'title' => $request->title,
            'text' => $request->text,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'active' => true,
            'sort' => 500
        ]);
        $params['images'] = \App\Image::where(['slider_id' => $request->slider_id])->orderBy('sort')->get();
        return view('admin.images.show', compact('params'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $params['images'] = \App\Image::where(['slider_id' => $id])->orderBy('sort')->get();
        return view('admin.images.show', compact('params'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $params['image'] = \App\Image::find($id);
        return view('admin.images.edit', compact('params'));
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
        $image = \App\Image::find($id);
        if($request->hasFile('upload')) {
            Storage::delete($image->image);
            $image->image = Storage::url($request->file('upload')->store('FTUploads'));
            CUtils::ImageResize(storage_path('app/public') . $image->image, 1076, 576);
        }
        $image->url = $request->url;
        $image->title = $request->title;
        $image->text = $request->text;
        $image->active = ('on' == $request->active ? true : false);
        $image->sort = $request->sort;
        $image->start_time = $request->start_time;
        $image->end_time = $request->end_time;
        $image->save();
        $params['images'] = \App\Image::where(['slider_id' => $request->slider_id])->orderBy('sort')->get();
        return view('admin.images.show', compact('params'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = \App\Image::find($id);
        $slider_id = $image->slider_id;
        Storage::delete($image->image);
        $image->delete();
        $params['images'] = \App\Image::where(['slider_id' => $slider_id])->orderBy('sort')->get();
        return view('admin.images.show', compact('params'));
    }
}
