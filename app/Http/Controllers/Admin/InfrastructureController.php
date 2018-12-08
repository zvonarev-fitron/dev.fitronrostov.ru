<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Helpers\CUtils;


class InfrastructureController extends Controller
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
        return view('admin.infrastructures.create');
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
        $sort = 500;
        $text = '';
        if ($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store('/FTUploads'));
            CUtils::ImageResize(storage_path('app/public') . $image, 1382, 553);
        }
        if ($request->sort) $sort = $request->sort;
        if ($request->text) $text = $request->text;
        \App\Infrastructure::create([
            'club_id' => $request->club_id,
            'sort' => $sort,
            'image' => $image,
            'text' => $text
        ]);
        return $this->show($request->club_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $params['club'] = \App\Club::find($id);
        $params['infrastructures'] = $params['club']->infrastructures->sortBy('sort');
        if(is_null($params['infrastructures'])) $params['infrastructures'] = [];
        return view('admin.infrastructures.show', compact('params'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $params['infrastructure'] = \App\Infrastructure::find($id);
        return view('admin.infrastructures.edit', compact('params'));
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
        $infrastructure = \App\Infrastructure::find($id);
        if ($request->hasFile('image')) {
            Storage::delete($infrastructure->image);
            $infrastructure->image = Storage::url($request->file('image')->store('/FTUploads'));
            CUtils::ImageResize(storage_path('app/public') . $infrastructure->image, 1382, 553);
        }
        $infrastructure->sort = $request->sort;
        $infrastructure->active = $request->active;
        $infrastructure->text = $request->text;
        $infrastructure->save();
        return $this->show($infrastructure->club_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infrastructure = \App\Infrastructure::find($id);
        if($infrastructure->image) Storage::delete($infrastructure->image);
        $club_id = $infrastructure->club_id;
        $infrastructure->delete();
        return $this->show($club_id);
    }
}
