<?php

namespace App\Http\Controllers\Admin;

use App\Special;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SpecialController extends Controller
{

    protected $params;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dump('index');


        $this->params['special'] = \App\Special::all();
        $this->params['type_card'] = \App\TypeCard::where('active', true)->get();

        return view('admin.special.index', ['params' => $this->params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->params['type_card'] = \App\TypeCard::where('active', true)->get();
        return view('admin.special.create', ['params' => $this->params]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dump('store');

        $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'type_card_id' => 'required|int'
            ]
        );
        if($validator->fails()){
            return view('admin.special.create')->withErrors($validator)->with('old', $request);
        }
        else {
            \App\Special::create([
                'name' => $request->name,
                'description' => $request->description,
                'price_1' => $request->price_1,
                'price_2' => $request->price_2,
                'start_active' => $request->start_active,
                'end_active' => $request->end_active,
                'type_card_id' => $request->type_card_id,
                'active' => true,
                'rassrochka' => false
            ]);
        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function show(Special $special)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function edit(Special $special)
    {
        $this->params['special'] = $special;
        $this->params['type_card'] = \App\TypeCard::where('active', true)->get();
        return view('admin.special.edit', ['params' => $this->params]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Special $special)
    {
        $special->name = $request->name;
        $special->description = $request->description;
        $special->price_1 = $request->price_1;
        $special->price_2 = $request->price_2;
        $special->start_active = $request->start_active;
        $special->end_active = $request->end_active;
        $special->active = isset($request->active) ? ($request->active == 'on' ? true : false) : false;
        $special->rassrochka = isset($request->rassrochka) ? ($request->rassrochka == 'on' ? true : false) : false;
        $special->type_card_id = $request->type_card_id;
        $special->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
        $special->delete();
        return $this->index();
    }
}
