<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params['categories'] = \App\Category::all()->sortBy('sort');
        return view('admin.categories.index', compact('params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = '';
        if($request->hasFile('image'))
            $image = Storage::url($request->file('image')->store('/FTUploads'));
        \App\Category::create([
            'name' => $request->name,
            'short' => $request->short,
            'image' => $image,
            'sort' => (int)$request->sort,
            'url' => $request->url,
            'description' => $request->description,
            'seo_h1' => $request->seo_h1,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description
        ]);
        return '<script>document.location.replace("' . route('fitnes') . '");</script>';
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
        $params['category'] = \App\Category::find($id);
        return view('admin.categories.edit', compact('params'));
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
        $params['category'] = \App\Category::find($id);
        if($request->hasFile('image')){
            Storage::delete($params['category']->image);
            $params['category']->image = Storage::url($request->file('image')->store('/FTUploads'));
        }
        $params['category']->sort = $request->sort;
        $params['category']->name = $request->name;
        $params['category']->short = $request->short;
        $params['category']->url = $request->url;
        $params['category']->seo_h1 = $request->seo_h1;
        $params['category']->seo_title = $request->seo_title;
        $params['category']->seo_keywords = $request->seo_keywords;
        $params['category']->seo_description = $request->seo_description;
        $params['category']->description = $request->description;
        $params['category']->save();
        $params['categories'] = \App\Category::all();
        return view('admin.categories.index', compact('params'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = \App\Category::find($id);
        Storage::delete($category->image);
        $category->delete();
        return '<script>document.location.replace("' . route('fitnes') . '");</script>';
//        $params['categories'] = \App\Category::all();
//        return view('admin.categories.index', compact('params'));
    }
}
