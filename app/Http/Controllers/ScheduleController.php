<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;
use Illuminate\Support\Facades\DB;
use PDF;

class ScheduleController extends Controller
{
    protected $params;
    protected $view_days = 12;       //Количество дней показать в расписании

    public function __construct()
    {
        $this->params = LoadHeader::Start(15);
    }

    private function MaxTime($schedules)
    {
        $max_time = mktime(0, 0, 0, 1, 1, 1970);
        foreach($schedules as $sch){
            $t = $this->StampTime($sch->start_time);
            if($max_time < $t) $max_time = $t;
        }
        return $max_time;
    }

    private function MinTime($schedules)
    {
        $min_time = mktime(3, 1, 0, 1, 1, 2970);
        foreach($schedules as $sch){
            $t = $this->StampTime($sch->start_time);
            if($min_time > $t) $min_time = $t;
        }
        return $min_time;
    }

    private function StampTime($date)
    {
        $d = new \DateTime($date);
        return mktime($d->format('H'), $d->format('i'), 0, 1, 1, 1970);
    }

    private function StampDate($date)
    {
        return mktime(0, 0, 0, $date->format('m'), $date->format('d'), $date->format('Y'));
    }

    public function index()
    {
        $time = time();
        $this->params['date'] = new \DateTime();
        $this->params['todate'] = new \DateTime(date('Y-m-d'));
        $this->params['enddate'] = new \DateTime(date('Y-m-d', $time+$this->view_days*24*60*60));
        for($i = 0; $i < $this->view_days; $i++) $this->params['week_date'][] =  new \DateTime(date('Y-m-d', $time+$i*24*60*60));
        $this->params['years'] = \App\Year::all()->sortBy('sort');
        $this->params['trainings'] = \App\Training::all();
        $this->params['categories'] = \App\Category::all();
        $this->params['intensities'] = \App\Intensity::all();
        $this->params['rooms'] = \App\Room::all();
        $schedules = DB::select('select * from schedules as t where t.clubs_id=:club_id and date_trunc(\'day\', t.start_time)>=:todate and date_trunc(\'day\', t.start_time)<:enddate order by t.start_time asc',
            ['todate' => $this->params['todate'], 'enddate' => $this->params['enddate'], 'club_id' => $this->params['select_club']->id]);
        if(0 < count($schedules)) {
            $this->params['schedules'] = collect(array_map(function ($obj) {
                return new \App\Schedule(get_object_vars($obj));
            }, $schedules));
            $sy = '';
            $first = true;
            foreach ($this->params['schedules'] as $sch) {
                if ($first) {
                    $sy = \App\ScheduleYear::where('schedules_id', $sch->id);
                    $first = false;
                } else {
                    $sy = $sy->orWhere('schedules_id', $sch->id);
                }
            }
            $sy = $sy->get();
            $this->params['group_sy'] = $sy->groupBy('years_id')->sortKeys();
            $min_time = $this->MinTime($this->params['schedules']);
            $max_time = $this->MaxTime($this->params['schedules']);
            $tr = [];
            for ($i = $min_time; $i <= $max_time; $i += 60) {
                $td = [];
                $s = false;
                foreach ($this->params['week_date'] as $wd) {
                    $td_stamp = $this->StampDate($wd);
                    $td_ = [];
                    foreach ($this->params['schedules'] as $key => $sch) {
                        if ($td_stamp == $sch->DateStamp() && $i == $sch->TimeStamp()) {
                            $td_[] = $sch;
                            $s = true;
                        }
                    }
                    $td[] = $td_;
                }
                if($s) $tr[$i] = $td;
                $s = false;
            }
            $this->params['tr'] = $tr;
            $this->params['col'] = date('H', $min_time) - 1;
        }
        return view('schedule.index', ['params' => $this->params]);
    }

    public function age($id, $club_id)
    {
        $time = time();
        $this->params['date'] = new \DateTime();
        $this->params['todate'] = new \DateTime(date('Y-m-d'));
        $this->params['enddate'] = new \DateTime(date('Y-m-d', $time+$this->view_days*24*60*60));
        for($i = 0; $i < $this->view_days; $i++) $this->params['week_date'][] =  new \DateTime(date('Y-m-d', $time+$i*24*60*60));
        $this->params['years'] = \App\Year::all()->sortBy('sort');
        $this->params['trainings'] = \App\Training::all();
        $this->params['categories'] = \App\Category::all();
        $this->params['intensities'] = \App\Intensity::all();
        $this->params['rooms'] = \App\Room::all();
        $schedules = DB::select('select * from schedules as t where t.clubs_id=:club_id and date_trunc(\'day\', t.start_time)>=:todate and date_trunc(\'day\', t.start_time)<:enddate order by t.start_time asc',
            ['todate' => $this->params['todate'], 'enddate' => $this->params['enddate'], 'club_id' => $this->params['select_club']->id]);

//        $schedules = collect(array_map(function($obj){
//            return new \App\Schedule(get_object_vars($obj));
//        }, $schedules));

        $schedules = collect($schedules)->map(function($obj){ return new \App\Schedule(get_object_vars($obj));});
        $sy = '';
        $first = true;
        foreach($schedules as $sch){
            if($first){
                $sy = \App\ScheduleYear::where(['schedules_id' => $sch->id]);
                $first = false;
            }
            else{
                $sy = $sy->orWhere('schedules_id', $sch->id);
            }
        }
        $sy = $sy->get()->where('years_id', $id);
        foreach($sy as $ys) $ttt[] = $schedules->firstWhere('id', $ys->schedules_id);
        $this->params['schedules'] = collect($ttt);
        $this->params['group_sy'] = $sy->groupBy('years_id')->sortKeys();
        $min_time = $this->MinTime($this->params['schedules']);
        $max_time = $this->MaxTime($this->params['schedules']);
        $tr = [];
        for($i = $min_time; $i <= $max_time; $i += 60){
            $td = [];
            $s = false;
            foreach($this->params['week_date'] as $wd) {
                $td_stamp = $this->StampDate($wd);
                $td_ = [];
                foreach ($this->params['schedules'] as $key=>$sch){
                    if($td_stamp == $sch->DateStamp() && $i == $sch->TimeStamp()){
                        $td_[] = $sch;
                        $s = true;
                    }
                }
                $td[] = $td_;
            }
            if($s) $tr[$i] = $td;
            $s = false;
        }
        $this->params['tr'] = $tr;
        $this->params['col'] = date('H', $min_time) - 1;
        return view('schedule.age', ['params' => $this->params]);
    }

    public function TimeTableDownLoad()
    {
//        dump('TimeTableDownLoad');
        $this->view_days = 7;       //Количество дней показать в расписании
        $time = time();
        $this->params['date'] = new \DateTime();
        $this->params['todate'] = new \DateTime(date('Y-m-d'));
        $this->params['enddate'] = new \DateTime(date('Y-m-d', $time+$this->view_days*24*60*60));
        for($i = 0; $i < $this->view_days; $i++) $this->params['week_date'][] =  new \DateTime(date('Y-m-d', $time+$i*24*60*60));
        $this->params['years'] = \App\Year::all()->sortBy('sort');
        $this->params['trainings'] = \App\Training::all();
        $this->params['categories'] = \App\Category::all();
        $this->params['intensities'] = \App\Intensity::all();
        $this->params['rooms'] = \App\Room::all();
        $schedules = DB::select('select * from schedules as t where t.clubs_id=:club_id and date_trunc(\'day\', t.start_time)>=:todate and date_trunc(\'day\', t.start_time)<:enddate order by t.start_time asc',
            ['todate' => $this->params['todate'], 'enddate' => $this->params['enddate'], 'club_id' => $this->params['select_club']->id]);
        if(0 < count($schedules)) {
            $this->params['schedules'] = collect(array_map(function ($obj) {
                return new \App\Schedule(get_object_vars($obj));
            }, $schedules));
            $sy = '';
            $first = true;
            foreach ($this->params['schedules'] as $sch) {
                if ($first) {
                    $sy = \App\ScheduleYear::where('schedules_id', $sch->id);
                    $first = false;
                } else {
                    $sy = $sy->orWhere('schedules_id', $sch->id);
                }
            }
            $sy = $sy->get();
            $this->params['group_sy'] = $sy->groupBy('years_id')->sortKeys();
            $min_time = $this->MinTime($this->params['schedules']);
            $max_time = $this->MaxTime($this->params['schedules']);
            $tr = [];
            for ($i = $min_time; $i <= $max_time; $i += 60) {
                $td = [];
                $s = false;
                foreach ($this->params['week_date'] as $wd) {
                    $td_stamp = $this->StampDate($wd);
                    $td_ = [];
                    foreach ($this->params['schedules'] as $key => $sch) {
                        if ($td_stamp == $sch->DateStamp() && $i == $sch->TimeStamp()) {
                            $td_[] = $sch;
                            $s = true;
                        }
                    }
                    $td[] = $td_;
                }
                if($s) $tr[$i] = $td;
                $s = false;
            }
            $this->params['tr'] = $tr;
            $this->params['col'] = date('H', $min_time) - 1;
        }

//        return view('schedule.pdf', ['params' => $this->params]);
//        loadFile('http://www.github.com')
//        $pdf = PDF::loadFile('http://yandex.ru')->setOption('encoding', 'UTF-8')->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0);   //->save('myfile4.pdf');
        $pdf = PDF::loadView('schedule.pdf', ['params' => $this->params]);


//        $pdf->render();
        //$pdf->setPaper('L', 'landscape');

//        $pdf->setOptions(['dpi' => 96, 'defaultFont' => 'sans-serif']);

//        $pdf = PDF::loadHTML('<h1 style="font-family: \'Arial\'; background: red; color: blue;">Русский</h1><h1 style="font-family: Courier New; background: red; color: blue;">English</h1>')->setOption('encoding', 'UTF-8')->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0);   //->save('myfile4.pdf');
//        dd($pdf);
        return $pdf->stream();
//            ->header('Content-Type','application/pdf');

//        return $pdf->download('myfile4.pdf');


    }
}
