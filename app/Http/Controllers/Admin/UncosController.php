<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UncosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params['news'] = \App\Uncos::all()->sortByDesc('sort');
        return view('admin.uncos.index', compact('params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max_sort = DB::table('news')->max('sort');
        $params['max_sort'] = (0 == (int)$max_sort ? 500 : $max_sort + 10);
        return view('admin.uncos.create', compact('params'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Uncos::create([
            'active' => ('on' == $request->active ? true : false),
            'sort' => $request->sort,
            'code' => $request->code,
            'title' => $request->title,
            'date' => $request->date,
            'seo_h1' => $request->seo_h1,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'preview' => $request->preview,
            'description' => $request->description
        ]);
        return $this->index();
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
        $params['uncos'] = \App\Uncos::find($id);
        return view('admin.uncos.edit', compact('params'));
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
        $uncos = \App\Uncos::find($id);
        $uncos->active = ('on' == $request->active ? true : false);
        $uncos->sort = $request->sort;
        $uncos->code = $request->code;
        $uncos->title = $request->title;
        $uncos->date = $request->date;
        $uncos->seo_h1 = $request->seo_h1;
        $uncos->seo_title = $request->seo_title;
        $uncos->seo_keywords = $request->keywords;
        $uncos->preview = $request->preview;
        $uncos->description = $request->description;
        $uncos->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Uncos::destroy($id);
        return $this->index();
    }
}
