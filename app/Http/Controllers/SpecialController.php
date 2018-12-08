<?php

namespace App\Http\Controllers;

use App\Special;
use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class SpecialController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(18);
        $this->params['date'] = new \DateTime(date('Y-m-d'));
    }

    public function index()
    {

        $special = \App\Special::where('rassrochka', false)->get();
        $date = $this->params['date'];
        $this->params['special'] = $special->filter(function(\App\Special $special) use ($date){
            $start = is_null($special->start_active) ? true : (new \DateTime($special->start_active)) < $date;
            $end = is_null($special->end_active) ? true : (new \DateTime($special->end_active)) > $date;
            return $special->active && $start && $end;
        });
        $this->params['special_1'] = $this->params['special'][0] ?? false;
        $this->params['special_2'] = $this->params['special'][1] ?? false;
        if($this->params['special_1']) {
            $this->params['special_1']->price_1 = number_format($this->params['special_1']->price_1, 0, '', ' ');
            $this->params['special_1']->price_2 = number_format($this->params['special_1']->price_2, 0, '', ' ');
        }
        if($this->params['special_2']) {
            $this->params['special_2']->price_1 = number_format($this->params['special_2']->price_1, 0, '', ' ');
            $this->params['special_2']->price_2 = number_format($this->params['special_2']->price_2, 0, '', ' ');
        }


        $special = \App\Special::where('rassrochka', true)->get();
        $this->params['special_r'] = $special->filter(function(\App\Special $special) use ($date){
            $start = is_null($special->start_active) ? true : (new \DateTime($special->start_active)) < $date;
            $end = is_null($special->end_active) ? true : (new \DateTime($special->end_active)) > $date;
            return $special->active && $start && $end;
        });
        $this->params['special_r_1'] = $this->params['special_r'][0] ?? false;
        $this->params['special_r_2'] = $this->params['special_r'][1] ?? false;
        if($this->params['special_r_1']) {
            $this->params['special_r_1']->price_1 = number_format($this->params['special_r_1']->price_1, 0, '', ' ');
//        $this->params['special_r_1']->price_2 = number_format($this->params['special_1']->price_2, 0 , '', ' ');
        }
        if($this->params['special_r_2']) {
            $this->params['special_r_2']->price_1 = number_format($this->params['special_r_2']->price_1, 0, '', ' ');
//        $this->params['special_r_2']->price_2 = number_format($this->params['special_2']->price_2, 0 , '', ' ');
        }

        return view('special.index', ['params' => $this->params]);
    }
}
