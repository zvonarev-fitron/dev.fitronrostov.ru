<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    protected $params;

    public function clubs()
    {
        $this->params['clubs'] = \App\Club::all();
        foreach($this->params['clubs'] as $club){
            $this->params['trainer'][$club->id] = \App\Trainer::where('clubs_id', $club->id)->count();
        }
        return view('admin.trainer.clubs', ['params' => $this->params]);
    }

    public function type_trainer($club)
    {
        $this->params['type_trainer'] = \App\TypeTrainer::all();
        foreach($this->params['type_trainer'] as $type){
            $this->params['trainer'][$type->id] = \App\Trainer::where([['clubs_id', '=', $club],['type_trainers_id', '=', $type->id]])->count();
        }
        return view('admin.trainer.type', ['params' => $this->params]);
    }

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
        return view('admin.trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $picture = '';
        $image = '';
        if($request->hasFile('picture')) $picture = Storage::url($request->file('picture')->store('/FTUploads'));
        if($request->hasFile('image')) $image = Storage::url($request->file('image')->store('/FTUploads'));
        \App\Trainer::create([
            'type_trainers_id' => $request->type_trainers_id,
            'clubs_id' => $request->clubs_id,
            'name' => $request->name,
            'code' => $request->code,
            'picture' => $picture,
            'image' => $image,
            'youtube' => $request->youtube,
            'seo_h1' => $request->seo_h1,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'description' => $request->description
        ]);
        return $this->show($request->clubs_id . '_' . $request->type_trainers_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ids = explode('_', $id);
        $this->params['trainers'] = \App\Trainer::where([['clubs_id', '=', $ids[0]],['type_trainers_id', '=', $ids[1]]])->get();
        return view('admin.trainer.show', ['params' => $this->params]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->params['trainer'] = \App\Trainer::find($id);
        return view('admin.trainer.edit', ['params' => $this->params]);
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
        $trainer = \App\Trainer::find($id);
        if($request->hasFile('picture')){
            Storage::delete($trainer->picture);
            $trainer->picture = Storage::url($request->file('picture')->store('FTUploads'));
        }
        if($request->hasFile('image')){
            Storage::delete($trainer->image);
            $trainer->image = Storage::url($request->file('image')->store('FTUploads'));
        }
        $trainer->name = $request->name;
        $trainer->code = $request->code;
        $trainer->youtube = $request->youtube;
        $trainer->seo_h1 = $request->seo_h1;
        $trainer->seo_title = $request->seo_title;
        $trainer->seo_keywords = $request->seo_keywords;
        $trainer->seo_description = $request->seo_description;
        $trainer->description = $request->description;
        $trainer->save();
        return $this->show($trainer->clubs_id . '_' . $trainer->type_trainers_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = \App\Trainer::find($id);
        $id_show = $trainer->clubs_id . '_' . $trainer->type_trainers_id;
        if($trainer->picture) Storage::delete($trainer->picture);
        if($trainer->image) Storage::delete($trainer->image);
        $trainer->delete();
        return $this->show($id_show);
    }
}
