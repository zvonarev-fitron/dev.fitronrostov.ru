<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params['clubs'] = \App\Club::all();
        return view('admin.clubs.index', compact('params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clubs.create');
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
        if($request->hasFile('market_image')) $image = Storage::url($request->file('market_image')->store('/FTUploads'));

        \App\Club::create([
            'code' => $request->code,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'map_x' => $request->map_x,
            'map_y' => $request->map_y,
            'iframe' => $request->iframe,
            'market_image' => $image
        ]);
        $params['clubs'] = \App\Club::all();
        return view('admin.clubs.index', compact('params'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $params['clubs'] = \App\Club::all();
        return view('admin.clubs.index', compact('params'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $params['club'] = \App\Club::find($id);
        return view('admin.clubs.edit', compact('params'));
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
        $image = '';
        $club = \App\Club::find($id);
        if($request->hasFile('market_image')){
            Storage::delete($club->market_image);
            $image = Storage::url($request->file('market_image')->store('/FTUploads'));
        }
        $club->code = $request->code;
        $club->name = $request->name;
        $club->address = $request->address;
        $club->phone = $request->phone;
        $club->map_x = $request->map_x;
        $club->map_y = $request->map_y;
        $club->iframe = $request->iframe;
        $club->market_image = $image;
        $club->save();
        $params['clubs'] = \App\Club::all();
        return view('admin.clubs.index', compact('params'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = \App\Club::find($id);
        Storage::delete($club->marker_image);
        $club->delete();
        $params['clubs'] = \App\Club::all();
        return view('admin.clubs.index', compact('params'));
    }
}
