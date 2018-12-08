<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class UncosController extends Controller
{
    protected $params;
    protected $select_club_id;
    protected $main_page_id;

    public function __construct()
    {
        $this->params = LoadHeader::Start(12);

//        $this->select_club_id = 5;
//        $clubs = \App\Club::all();
//        $this->params['select_club'] = $clubs->only($this->select_club_id)->first();
//        $this->params['clubs'] = $clubs->except($this->select_club_id);
//        $this->params['pages'] = \App\Page::all()->sortBy('sort');
//        $this->params['main_page_id'] = 12;
//        $this->params['page'] = $this->params['pages']->only(['id' => $this->params['main_page_id']])->first();
    }

    public function index()
    {
        $this->params['uncos'] = \App\Uncos::where('active', true)->orderBy('sort', 'desc')->paginate(10);

//        dump($this->params['uncos']);


        return view('uncos.index', ['params' => $this->params]);
    }

    public function show($code)
    {
        $this->params['uncos'] = \App\Uncos::where('active', true)->where('code', $code)->first();
        return view('uncos.show', ['params' => $this->params]);
    }
}
