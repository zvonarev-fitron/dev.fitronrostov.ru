<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class ClubsController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(7);
    }

    public function index()
    {
//    dump($this->params);
        return view('clubs.index', ['params' => $this->params]);
    }

    public function club($code)
    {
        $this->params['view_club'] = $this->params['all_clubs']->where('code', $code)->first();
        $this->params['club'] = $code;
        return view('clubs.club', ['params' => $this->params]);
    }
}
