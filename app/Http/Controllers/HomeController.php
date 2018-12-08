<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    protected $params;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->params = LoadHeader::Start(11);
        $this->params['date'] = new \DateTime(date('Y-m-d'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $agent = new Agent();
//        $device = $agent->device();
//        $platform = $agent->platform();
//        $browser = $agent->browser();
//        dump($device);
//        dump($platform);
//        dump($browser);
//
//        dump($agent->isDesktop());
//        dump($agent->isPhone());
//        dd($agent->isRobot());

        $this->params['todate'] = new \DateTime();
//        $this->params['date'] = new \DateTime(date('Y-m-d'));
        $this->params['trainings'] = \App\Training::all();
        $this->params['categories'] = \App\Category::all();
        $this->params['rooms'] = \App\Room::all();
        $schedules = DB::select('select * from schedules as t where t.active=true and date_trunc(\'day\', t.start_time)=:todate order by t.start_time', ['todate' => $this->params['date']]);
        $this->params['schedules'] = collect(array_map(function($obj){
            return new \App\Schedule(get_object_vars($obj));
        }, $schedules));

//        dump($this->params);

        return view('home.index', ['params' => $this->params]);
    }

    public function wowslider($id, $club)
    {
//        $this->params['date'] = new \DateTime(date('Y-m-d'));
        switch($id){
            case 1:
                $params['doings'] = \App\Doing::all()->sortBy('sort');
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
