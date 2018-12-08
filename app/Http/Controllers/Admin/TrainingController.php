<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
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
        $params['years'] = \App\Year::all()->sortBy('id');
        $params['types'] = \App\TypeTraining::all()->sortBy('id');
        return view('admin.trainings.create', compact('params'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dump($request);

        $image = '';
        if($request->hasFile('image')) $image = Storage::url($request->file('image')->store('/FTUploads'));
        $training = \App\Training::create([
            'category_id' => (int)$request->category_id,
            'type_traning_id' => (int)$request->type_traning_id,
            'sort' => (is_null($request->sort) ? 500 : (int)$request->sort),
            'name' => $request->name,
            'min_time' => $request->min_time,
            'max_time' => $request->max_time,
            'url' => $request->url,
            'image' => $image,
            'seo_h1' => $request->seo_h1,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'preview' => $request->preview,
            'description' => $request->description
        ]);
        if(isset($request->year) && 0 < $training->id){
            foreach($request->year as $year_id){
                \App\TrainingYear::create([
                    'training_id' => $training->id,
                    'year_id' => $year_id,
                ]);
            }
        }

//        dd($training);

        return '<script>document.location.replace("' . route('fitnes_id', ['id' => (int)$request->category_id]) . '");</script>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $params['trainings'] = \App\Training::where(['category_id' => $id])->orderBy('sort')->orderby('id')->get();
        $params['category'] = \App\Category::find($id);
        $params['trainings'] = $params['category']->trainings->sortBy('sort');
        return view('admin.trainings.show', compact('params'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $params['training'] = \App\Training::find($id);
        $params['training_years'] = \App\TrainingYear::where('training_id', $id)->get();
        $params['years'] = \App\Year::all()->sortBy('id');
        $params['types'] = \App\TypeTraining::all()->sortBy('id');
        return view('admin.trainings.edit', compact('params'));
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
        $training = \App\Training::find($id);
        if($request->hasFile('image')){
            Storage::delete($training->image);
            $training->image = Storage::url($request->file('image')->store('/FTUploads'));
        }
//        $training->year_id = $request->year_id;
        $training->type_training_id = $request->type_training_id;
        $training->sort = $request->sort;
        $training->name = $request->name;
        $training->min_time = $request->min_time;
        $training->max_time = $request->max_time;
        $training->url = $request ->url;
        $training->seo_h1 = $request->seo_h1;
        $training->seo_title = $request->seo_title;
        $training->seo_keywords = $request->seo_keywords;
        $training->seo_description = $request->seo_description;
        $training->preview = $request->preview;
        $training->description = $request->description;
        $training->active = $request->active;
        $training->save();

        \App\TrainingYear::where('training_id', $id)->delete();
        if(isset($request->year) && 0 < count($request->year)){
            foreach($request->year as $year_id){
                \App\TrainingYear::create([
                    'training_id' => $id,
                    'year_id' => $year_id,
                ]);
            }
        }
        return $this->show($training->category_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = \App\Training::find($id);
        $category_id = $training->category_id;
        Storage::delete($training->image);
        $training->delete();
        return '<script>document.location.replace("' . route('fitnes_id', ['id' => $category_id]) . '");</script>';
    }
}
