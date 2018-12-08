<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class FitnesController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(1);
    }

    public function index()
    {
        $this->params['categories'] = \App\Category::all()->sortBy('sort');
        return view('fitnes-uslugi.index', ['params' => $this->params]);
    }

    public function uslugi($code)
    {
        $this->params['categories'] = \App\Category::all()->sortBy('sort');
        $this->params['category'] = $this->params['categories']->where('url', $code)->first();
        $this->params['trainings'] = $this->params['category']->trainings->sortBy('sort');
        $this->params['code'] = $code;
        return view('fitnes-uslugi.uslugi', ['params' => $this->params]);
    }

    public function training($code, $url)
    {
        $this->params['categories'] = \App\Category::all()->sortBy('sort');
        $this->params['category'] = $this->params['categories']->where('url', $code)->first();
        $this->params['training'] = \App\Training::where('url', $url)->first();
        $this->params['code'] = $code;
        $this->params['url'] = $url;
        return view('fitnes-uslugi.training', ['params' => $this->params]);
    }
}
