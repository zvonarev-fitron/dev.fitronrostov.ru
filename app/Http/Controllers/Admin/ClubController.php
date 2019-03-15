<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\PriceClubs;
use App\Comp;

class ClubController extends Controller
{

    private $params = [];

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
        $this->params['comps'] = Comp::all();
        $this->params['club'] = \App\Club::find($id);
        $this->params['price_club'] = PriceClubs::where('club_id', $id)->get();
        $this->params['list'] = [
            [
                'id' => 1,
                'name' => '1'
            ],
            [
                'id' => 2,
                'name' => '2'
            ],
            [
                'id' => 3,
                'name' => '3'
            ],
            [
                'id' => 4,
                'name' => '4'
            ],
            [
                'id' => 5,
                'name' => '5'
            ],
            [
                'id' => 6,
                'name' => '6'
            ],
            [
                'id' => 7,
                'name' => '7'
            ],
        ];


        $this->params['ids_price_club'] = [];
        foreach($this->params['price_club'] as $price){
            $this->params['ids_price_club'][$price['id']] = $price;
        }
//        dump($this->params);
        return view('admin.clubs.edit', ['params' => $this->params]);
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
        $club = \App\Club::find($id);

        if($request->hasFile('market_image')){
            Storage::delete($club->market_image);
            $club->market_image = Storage::url($request->file('market_image')->store('/FTUploads'));
        }
        if($request->hasFile('small_map_image')){
            Storage::delete($club->small_map_image);
            $club->small_map_image = Storage::url($request->file('small_map_image')->store('/FTUploads'));
        }

        $club->code = $request->code;
        $club->name = $request->name;
        $club->address = $request->address;
        $club->phone = $request->phone;
        $club->map_x = $request->map_x;
        $club->map_y = $request->map_y;
        $club->iframe = $request->iframe;
        $club->companies_id = $request->companies_id;
        $club->small_map_url = $request->small_map_url;
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
        PriceClubs::where('club_id', $id)->delete();
        $club->delete();
        $params['clubs'] = \App\Club::all();
        return view('admin.clubs.index', compact('params'));
    }

    /**
     * Добавить изменить цены
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function price_edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'price_club_name' => 'required|string|max:255'
        ]);
        if($validator->fails()) return $this->edit($id);

        if(0 < $request->price_club_id){
            PriceClubs::where('id', $request->price_club_id)->update([
                'name' => $request->price_club_name,
                'price' => $request->price_club_price,
                'level_ps' => $request->price_club_level,
                'ps' => $request->price_club_ps
            ]);
        }
        else {
            PriceClubs::create([
                'club_id' => $id,
                'name' => $request->price_club_name,
                'price' => $request->price_club_price,
                'level_ps' => $request->price_club_level,
                'ps' => $request->price_club_ps
            ]);
        }
        return $this->edit($id);
    }
    public function price_delete($id_club, $id_price)
    {
        PriceClubs::where('id', $id_price)->delete();
        return $this->edit($id_club);
    }
}
