<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    protected $params;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $this->params['clubs'] = \App\Club::all();
        return view('admin.rooms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Room::create([
            'clubs_id' => $request->clubs_id,
            'name' => $request->name
        ]);
        return $this->show($request->clubs_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->params['club'] = \App\Club::find($id);
        $this->params['rooms']  = $this->params['club']->rooms;
        return view('admin.rooms.show', ['params' => $this->params]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->params['room'] = \App\Room::find($id);
        return view('admin.rooms.edit', ['params' => $this->params]);
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
        $room = \App\Room::find($id);
        $room->name = $request->name;
        $room->active = ('on' == $request->active ? true : false);
        $room->save();
        return $this->show($room->clubs_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = \App\Room::find($id);
        $clubs_id = $room->clubs_id;
        $room->delete();
        return $this->show($clubs_id);
    }
}
