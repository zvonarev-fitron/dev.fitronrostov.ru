<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class DoingController extends Controller
{
    protected $params;
//    protected $select_club_id;
//    protected $main_page_id;

    public function __construct()
    {
        $this->params = LoadHeader::Start(9);

//        $this->select_club_id = 5;
//        $clubs = \App\Club::all();
//        $this->params['select_club'] = $clubs->only($this->select_club_id)->first();
//        $this->params['clubs'] = $clubs->except($this->select_club_id);
//        $this->params['pages'] = \App\Page::all()->sortBy('sort');
//        $this->params['main_page_id'] = 9;
//        $this->params['page'] = $this->params['pages']->only(['id' => $this->params['main_page_id']])->first();
    }

    public function index()
    {
        return view('doings.index', ['params' => $this->params]);
    }

    public function doing($code)
    {
        $this->params['doing'] = \App\Doing::where('url', $code)->first();
        return view('doings.doing', ['params' => $this->params]);
    }
}
