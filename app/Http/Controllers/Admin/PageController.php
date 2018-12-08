<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params['pages'] = \App\Page::all()->sortBy('sort');
        return view('admin.pages.index', compact('params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Page::create([
            'code' => $request->code,
            'title' => $request->title,
            'name' => $request->name,
            'menu' => $request->menu,
            'sort' => (is_null($request->sort) ? 500 : $request->sort)
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
        $params['pages'] = \App\Page::all();
        return view('admin.pages.index', compact('params'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $params['page'] = \App\Page::find($id);
        return view('admin.pages.edit', compact('params'));
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
        $page = \App\Page::find($id);
        $page->code = $request->code;
        $page->title = $request->title;
        $page->name = $request->name;
        $page->menu = $request->menu;
        $page->trek = $request->trek;
        $page->sort = $request->sort;
        $page->active = (isset($request->active) && 'on' == $request->active ? true : false);
        $page->save();
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
        \App\Page::find($id)->delete();
        return $this->index();
//        $params['pages'] = \App\Page::all();
//        return view('admin.pages.index', compact('params'));
    }
}
