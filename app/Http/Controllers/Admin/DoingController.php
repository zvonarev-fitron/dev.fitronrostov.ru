<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use App\Doing;

class DoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params['doings'] = \App\Doing::all()->sortBy('sort');
        return view('admin.doings.index', compact('params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doings.create');
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
        if($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store('/FTUploads'));
            $this->image_resize(storage_path('app/public') . $image);
        }
        \App\Doing::create([
            'name' => $request->name,
            'url' => $request->url,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $image,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'preview' => $request->preview,
            'description' => $request->description
        ]);
        $params['doings'] = \App\Doing::all();
        return view('admin.doings.index', compact('params'));
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
        $params['doing'] = \App\Doing::find($id);
        $params['doing']->start_date = explode(' ', $params['doing']->start_date)[0];
        $params['doing']->end_date = explode(' ', $params['doing']->end_date)[0];
        return view('admin.doings.edit', compact('params'));
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
        $doing = \App\Doing::find($id);
        if($request->hasFile('image')){
            Storage::delete($doing->image);
            $image = Storage::url($request->file('image')->store('/FTUploads'));
            $this->image_resize(storage_path('app/public') . $image);
            $doing->image = $image;
        }
        $doing->sort = $request->sort;
        if('on' == $request->active) $doing->active = true;
        else $doing->active = false;
        $doing->name = $request->name;
        $doing->url = $request->url;
        $doing->title = $request->title;
        $doing->subtitle = $request->subtitle;
        $doing->start_date = $request->start_date;
        $doing->end_date = $request->end_date;
        $doing->preview = $request->preview;
        $doing->description = $request->description;
        $doing->save();
        $params['doings'] = \App\Doing::all();
        return view('admin.doings.index', compact('params'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doing = \App\Doing::find($id);
        Storage::delete($doing->image);
        $doing->delete();
        $params['doings'] = \App\Doing::all();
        return view('admin.doings.index', compact('params'));
    }

    function image_resize($file)
    {
        $scr_img=ImageCreateFromJpeg($file);
        $size = GetImageSize($file);
        $scr_width = $size[0];
        $scr_height = $size[1];

//        $dest_width = "300";
//        $dest_height = ($dest_width/$scr_width) * $scr_height;

        $dest_height = 564;
        $dest_width = 1000; //($dest_height / $scr_height) * $scr_width;
        $dest_img = ImageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($dest_img, $scr_img, 0, 0, 0, 0, $dest_width, $dest_height, $scr_width, $scr_height);
        ImageJpeg($dest_img, $file, 80);
        ImageDestroy($dest_img);
    }

    public function changeCB($table, $field, $onoff, $id)
    {
        $r = DB::table($table)->where('id', $id)->update([$field => $onoff]);
        return $r ? json_encode(['ok' => '1']) : json_encode(['errors' => ['Сообщение' => ['Ошибока'], 'field' => [$field], 'onoff' => [$onoff], 'id' => [$id], 'Результ' => $r ] ]);

//        return json_encode(['errors' => ['Сообщение' => ['Ошибка'], 'table' => [$table], 'field' => [$field], 'onoff' => [$onoff], 'id' => [$id], 'Результ' => ['$r'],
//            ] ]);
    }

}
