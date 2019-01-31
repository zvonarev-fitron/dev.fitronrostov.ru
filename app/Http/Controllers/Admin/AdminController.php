<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params['clubs'] = \App\Club::all();
        $this->params['sliders'] = \App\Slider::all();
        $this->params['categories'] = \App\Category::all()->sortBy('sort');
        $this->params['trainings'] = \App\Training::all()->sortBy('sort');
        $this->params['category_trainings'] = [];
        foreach($this->params['trainings'] as $training){
            $this->params['category_trainings'][$training->category_id][] = $training;
        }
        $this->params['type_trainer'] = \App\TypeTrainer::all();
    }

    public function index()
    {
        $this->params['code'] = '/';
        $params = $this->params;
        return view('admin.index', compact('params'));
    }

    public function slider()
    {
        $this->params['code'] = 'slider';
        $params = $this->params;
        return view('admin.index', compact('params'));
    }

    public function fitnes()
    {
        $this->params['code'] = 'fitnes';
        $params = $this->params;
        return view('admin.index', compact('params'));
    }

    public function fitnes_id($id)
    {
        $this->params['code'] = 'fitnes_id';
        $this->params['fitnes_id'] = $id;
        $params = $this->params;
        return view('admin.index', compact('params'));
    }
}
