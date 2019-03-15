<?php

namespace App\Http\Controllers\Admin;

use App\Comp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CompController extends Controller
{
    private $params = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->params['comps'] = Comp::all();
        return view('admin.comp.index', ['params' => $this->params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.comp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:100',
            'name_full' => 'required|max:100',
            'legal_addr' => 'required|max:255',
            'fact_addr' => 'required|max:255',
            'inn' => 'required|digits:12',
            'ogrnip' => 'required|digits:15',
            'okpo' => 'required|digits:10',
            'name_bank' => 'required|max:255',
            'r_schet' => 'required|digits:20',
            'k_schet' => 'required|digits:20',
            'bik' => 'required|digits:9',
            'b_inn' => 'required|digits:10',
            'kpp' => 'required|digits:9',
            'phone' => 'required|max:100',
            'fax' => 'required|max:100',
            'work' => 'required|max:100',
            'email' => 'required|email'
        ]);
        if($validator->fails()) {
            return view('admin.comp.create')->withErrors($validator)->with('old', $request);
        }
        Comp::create([
            'name' => $request->name,
            'name_full' => $request->name_full,
            'legal_addr' => $request->legal_addr,
            'fact_addr' => $request->fact_addr,
            'inn' => $request->inn,
            'ogrnip' => $request->ogrnip,
            'okpo' => $request->okpo,
            'name_bank' => $request->name_bank,
            'r_schet' => $request->r_schet,
            'k_schet' => $request->k_schet,
            'bik' => $request->bik,
            'b_inn' => $request->b_inn,
            'kpp' => $request->kpp,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'work' => $request->work,
            'email' => $request->email
        ]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function show(Comp $comp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function edit(Comp $comp)
    {
        $this->params['comp'] = $comp;
        return view('admin.comp.edit', ['params' => $this->params]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comp $comp)
    {
        $this->params['comp'] = $comp;
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:100',
            'name_full' => 'required|max:100',
            'legal_addr' => 'required|max:255',
            'fact_addr' => 'required|max:255',
            'inn' => 'required|digits:12',
            'ogrnip' => 'required|digits:15',
            'okpo' => 'required|digits:10',
            'name_bank' => 'required|max:255',
            'r_schet' => 'required|digits:20',
            'k_schet' => 'required|digits:20',
            'bik' => 'required|digits:9',
            'b_inn' => 'required|digits:10',
            'kpp' => 'required|digits:9',
            'phone' => 'required|max:100',
            'fax' => 'required|max:100',
            'work' => 'required|max:100',
            'email' => 'required|email'
        ]);
        if($validator->fails()) {
            return view('admin.comp.edit', ['params' => $this->params])->withErrors($validator)->with('old', $request);
        }
        $comp->name = $request->name;
        $comp->name_full = $request->name_full;
        $comp->legal_addr = $request->legal_addr;
        $comp->fact_addr = $request->fact_addr;
        $comp->inn = $request->inn;
        $comp->ogrnip = $request->ogrnip;
        $comp->okpo = $request->okpo;
        $comp->name_bank = $request->name_bank;
        $comp->r_schet = $request->r_schet;
        $comp->k_schet = $request->k_schet;
        $comp->bik = $request->bik;
        $comp->b_inn = $request->b_inn;
        $comp->kpp = $request->kpp;
        $comp->phone = $request->phone;
        $comp->fax = $request->fax;
        $comp->work = $request->work;
        $comp->email = $request->email;
        $comp->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comp $comp)
    {
        $comp->delete();
        return $this->index();
    }
}
