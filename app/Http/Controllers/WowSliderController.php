<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WowSliderController extends Controller
{
    public function index($id, $club)
    {
//        $this->params['date'] = new \DateTime(date('Y-m-d'));
        switch($id){
            case 1:
//                $params['doings'] = \App\Doing::all()->sortBy('sort');
                $params['doings'] = \App\Doing::where('active', '1')->orderBy('sort')->get();
                return view('wow.wowslider_2', compact('params'));
                break;
            case 2:
//                $params['wow'] = \App\Infrastructure::where('club_id', $club)->get();
//                return view('wow.wowslider_5', compact('params'));
                $params['infrastructure'] = \App\Infrastructure::where('club_id', $club)->get();
                return view('wow.wowslider_3', compact('params'));
                break;

            case 5:
                $params['wow'] = \App\Infrastructure::where('club_id', $club)->get();
                return view('wow.wowslider_5', compact('params'));
                break;
            case 14:
                $this->params['slider'] = \App\Slider::find(11);    //$id
                $date = $this->params['date'];
                $this->params['wow'] = $this->params['slider']->images->filter(function(\App\Image $image) use ($date){
                    $start = is_null($image->start_time) ? true : (new \DateTime($image->start_time)) < $date;
                    $end = is_null($image->end_time) ? true : (new \DateTime($image->end_time)) > $date;
                    return $image->active && $start && $end;
                });

//                dd($this->params);

                return view('wow.wowslider_5', ['params' => $this->params]);
                break;
            default:
                break;
        }
    }
}
