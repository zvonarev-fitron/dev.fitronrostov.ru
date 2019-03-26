<?php

namespace App\Http\Controllers\Admin;

use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Helpers\CUtils;

class ScheduleController extends Controller
{
    protected $params;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->params['id'] = explode('_', $id);
        $this->params['club'] = \App\Club::find((int)$this->params['id'][0]);
        $this->params['date'] = new \DateTime($this->params['id'][1] . '-' . $this->params['id'][2] . '-' . $this->params['id'][3]);
        $categories = \App\Category::all();
        $trainings = \App\Training::where('active', true)->orderBy('category_id', 'asc')->get();
        $rooms = \App\Room::where(['active' => true, 'clubs_id' => $this->params['club']->id])->get();
        $intensities = \App\Intensity::all();
        $years = \App\Year::all()->sortBy('sort');
        $list_years = [];
        foreach($years as $year){
            $list_years[] = ['n', $year->id, $year->name];
        }
        $this->params['list_years'] = $list_years;
        $list_intensities = [];
        foreach($intensities as $intensity){
            $list_intensities[] = ['t', $intensity->id, $intensity->name];
        }
        $this->params['list_intensities'] = $list_intensities;
        $list_rooms = [];
        foreach($rooms as $room){
            $list_rooms[] = ['t', $room->id, $room->name];
        }
        $this->params['list_rooms'] = $list_rooms;
        $list_trainings = [];
        foreach($categories as $category){
            $list_trainings[] = ['c', $category->id, $category->name];
            foreach($trainings as $key=>$training){
                if($training->category_id == $category->id){
                    $list_trainings[] = ['t', $training->id, $training->name];
                    unset($trainings[$key]);
                }
            }
        }
        foreach($list_trainings as $key=>$lt){
            if(isset($list_trainings[$key + 1])){
                if('c' == $lt[0] && 'c' == $list_trainings[$key + 1][0])
                    unset($list_trainings[$key]);
            }
            elseif('c' == $lt[0]){
                unset($list_trainings[$key]);
            }
        }
        $this->params['list_trainings'] = $list_trainings;

//        dd($this->params['list_trainings']);

        return view('admin.schedule.create', ['params' => $this->params]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'clubs_id' => 'required|integer|not_in:0',
            'training_id' => 'required|integer|not_in:0',
            'room_id' => 'required|integer|not_in:0',
            'intensity_id' => 'required|integer|not_in:0',
            'start_time' => 'required|date',
            'duration' => 'required|integer|not_in:0',
            'end_time' => 'required|date',
            'pre_entry' => 'sometimes|required|in:on',
            'paid' => 'sometimes|required|in:on',
            'show_age' => 'sometimes|required|in:on',
            'age' => 'sometimes|required',

        ], [
            'not_in' => 'Значение не может быть равным 0',
            'integer' => 'Значение должно быть целое число',
            'required' => 'Обязательное',
            'date' => 'Должна быть дата',
            'in' => 'Не верное значение',
            'in_array' => 'Не верное значение массива'
        ]);
        $sch = [
            'clubs_id' => $request->clubs_id,
            'trainings_id' => $request->training_id,
            'rooms_id' => $request->room_id,
            'intensities_id' => $request->intensity_id,
            'start_time' => $request->start_time,
            'duration' => $request->duration,
            'end_time' => $request->end_time,
        ];
        $sch['pre_entry'] = (isset($request->pre_entry) ? true: false);
        $sch['paid'] = (isset($request->paid) ? true: false);
        $sch['show_age'] = (isset($request->show_age) ? true: false);
        $new_sch = \App\Schedule::create($sch);
        if(isset($request->age)){
            foreach($request->age as $age){
                \App\ScheduleYear::create([
                    'years_id' => (int)$age,
                    'schedules_id' => $new_sch->id
                ]);
            }
        }
        $date = new \DateTime($request->start_time);
        $id = $request->clubs_id . '_' . $date->format('Y') . '_' . $date->format('m') . '_' . $date->format('d');
        return $this->show($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->params['id'] = explode('_', $id);
        $this->params['club'] = \App\Club::find((int)$this->params['id'][0]);
        $this->params['date'] = new \DateTime($this->params['id'][1] . '-' . $this->params['id'][2] . '-' . $this->params['id'][3]);
        $this->params['trainings'] = \App\Training::all();
        $this->params['rooms'] = \App\Room::all();
        $this->params['years'] = \App\Year::all();
        $this->params['schedules'] = DB::select('select * from schedules as t where t.clubs_id=:clubs_id and date_trunc(\'day\', t.start_time)=:todate order by t.start_time asc',
            ['clubs_id' => $this->params['club']->id, 'todate' => $this->params['date']]);
        if($this->params['schedules']) {
            foreach ($this->params['schedules'] as $key => $sch) {
                $this->params['schedules'][$key] = new \App\Schedule(get_object_vars($sch));
            }
        }

        $this->params['list_date'] = [];
        $interval = new \DateInterval('P3M');

        $eD = new \DateTime($this->params['date']->format('d-m-Y'));
        $eD->sub($interval);

        $incterval = new \DateInterval('P1D');
        $sD = new \DateTime($this->params['date']->format('d-m-Y'));

        $this->params['sch_list'] = DB::select("select date_trunc('day', t.start_time) as trunc_day from schedules as t where t.clubs_id=:clubs_id and t.start_time<:sD and t.start_time>:eD group by trunc_day;",
            ['clubs_id' => $this->params['club']->id, 'sD' => $sD->format('Y-m-d'), 'eD' => $eD->format('Y-m-d')]);

        $this->params['sss_lll'] = [];
        foreach($this->params['sch_list'] as $obj){
            $this->params['sss_lll'][] = $obj->trunc_day;
        }
        for($sD->sub($incterval); $sD > $eD; $sD->sub($incterval)){
            if(in_array($sD->format('Y-m-d 00:00:00'), $this->params['sss_lll'])) {
                $this->params['list_date'][] = [
                    'id' => $sD->format('d-m-Y'),
                    'name' => $sD->format('d') . ' ' . CUtils::RusMonth($sD->format('m')) . ' ' . $sD->format('Y')
                ];
            }
        }
        return view('admin.schedule.show', ['params' => $this->params]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calendar($id)
    {
        $this->params['id'] = explode('_', $id);
        $this->params['club'] = \App\Club::find((int)$this->params['id'][0]);
        $date = new \DateTime();
        $month = $date->format('m');
        $year = $date->format('Y');
        if(isset($this->params['id'][1])) $month = (13 > $this->params['id'][1] && 0 < $this->params['id'][1] ? $this->params['id'][1] : $month);
        if(isset($this->params['id'][2])) $year = (100 > $this->params['id'][2] ? 2000 + $this->params['id'][2] : $this->params['id'][2]);
        $start = new \DateTime($year . '-' . $month . '-' . '1');
        $this->params['date'] = $start;
        $this->params['prev_date'] = new \DateTime(date('Y-m-d', mktime(0, 0, 0, $month, -1, $year)));
        $this->params['next_date'] = new \DateTime(date('Y-m-d', mktime(0, 0, 0, $month, 1 + $start->format('t'), $year)));
        $week_day = $start->format('N');
        $this->params['start'] = new \DateTime(date('Y-m-d', mktime(0, 0, 0, $month, 2 - $week_day, $year)));
        $this->params['to_date_month'] = new \DateTime(date('Y-m-d', mktime(0, 0, 0, $month, 1, $year)));
        $this->params['schedules'] = DB::select('select count(*), tg.trunc_day from (
            select *,date_trunc(\'day\', t.start_time) as trunc_day from schedules as t 
            where t.clubs_id=:clubs_id and date_trunc(\'month\', t.start_time)=:todate) as tg group by tg.trunc_day',
            ['clubs_id' => $this->params['club']->id, 'todate' => $this->params['to_date_month']]);
        $day_count = [];
        foreach($this->params['schedules'] as $count){
            $day_count[(int)(new \DateTime($count->trunc_day))->format('d')] = $count->count;
        }
        for($i = 0; $i < 42; $i++){
            $mkt = mktime(0, 0, 0, $month, 2 - $week_day + $i, $year);
            $this->params['calendar'][] = [
                'day' => date('d', $mkt),
                'to_month' => ($month == date('m', $mkt) ? true : false),
                'count' => ($month == date('m', $mkt) ? (isset($day_count[(int)date('d', $mkt)]) ? $day_count[(int)date('d', $mkt)] : 0 ): 0),
            ];
        }
        return view('admin.schedule.calendar', ['params' => $this->params]);
    }

    public function copy($id, $date, $to)
    {
        $show_id = $id . '_' . preg_replace('/\-/', '_', $to);
        $copy_date = new \DateTime($date);
        $this->params['schedules'] = DB::select('select * from schedules as t where t.clubs_id=:clubs_id and date_trunc(\'day\', t.start_time)=:todate order by t.start_time asc',
            ['clubs_id' => $id, 'todate' => $copy_date]);
        foreach($this->params['schedules'] as $sch){
            $var = [];
            $var = [
                'clubs_id' => $id,
                'trainings_id' => $sch->trainings_id,
                'rooms_id' => $sch->rooms_id,
                'intensities_id' => $sch->intensities_id,
                'active' => true,
                'start_time' => $to . ' ' . explode(' ', $sch->start_time)[1],
                'end_time' => $to . ' ' . explode(' ', $sch->end_time)[1],
                'duration' => $sch->duration,
                'pre_entry' => $sch->pre_entry,
                'paid' => $sch->paid,
                'show_age' => $sch->show_age
            ];
            $new_sch = \App\Schedule::create($var);
        }
        return $this->show($show_id);
    }

    /**
     * Очистка дня от всех занятий
     *
     * @param $id
     * @param $date
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function erase($id, $date)
    {
        $erase_date = new \DateTime($date);
        $show_id = $id . '_' . $erase_date->format('Y_m_d');
        $sch = Schedule::whereDate('start_time', $erase_date->format('Y-m-d'))->get();
        foreach($sch as $schedule) $schedule->delete();
//        $sss = DB::table('schedules')->whereDate('start_time', $erase_date->format('Y-m-d'))->delete();
        return $this->show($show_id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->params['schedules'] = \App\Schedule::find($id);
        $this->params['date'] = new \DateTime($this->params['schedules']->start_time);
        $this->params['end_date'] = new \DateTime($this->params['schedules']->end_time);
        $this->params['club'] = \App\Club::find($this->params['schedules']->clubs_id);
        $categories = \App\Category::all();
        $trainings = \App\Training::where('active', true)->orderBy('category_id', 'asc')->get();
        $this->params['training'] = $this->params['schedules']->training;
        $this->params['room'] = $this->params['schedules']->room;
        $this->params['intensity'] = $this->params['schedules']->intensity;
        $this->params['age'] = $this->params['schedules']->years;
        $rooms = \App\Room::where(['active' => true, 'clubs_id' => $this->params['club']->id])->get();
        $intensities = \App\Intensity::all();
        $years = \App\Year::all()->sortBy('sort');
        $list_years = [];
        foreach($years as $year){
            $l = ['n', $year->id, $year->name];
            foreach($this->params['age'] as $age){
                if($age->id == $year->id){
                    $l = ['s', $year->id, $year->name];
                    break;
                }
            }
            $list_years[] = $l;
        }
        $this->params['list_years'] = $list_years;
        $list_trainings = [];
        foreach($categories as $category){
            $list_trainings[] = ['c', $category->id, $category->name];
            foreach($trainings as $key=>$training){
                if($training->category_id == $category->id){
                    $list_trainings[] = ['t', $training->id, $training->name];
                    unset($trainings[$key]);
                }
            }
        }
        foreach($list_trainings as $key=>$lt){
            if(isset($list_trainings[$key + 1])){
                if('c' == $lt[0] && 'c' == $list_trainings[$key + 1][0])
                    unset($list_trainings[$key]);
            }
            elseif('c' == $lt[0]){
                unset($list_trainings[$key]);
            }
        }
        $this->params['list_trainings'] = $list_trainings;
        $list_rooms = [];
        foreach($rooms as $room){
            $list_rooms[] = ['t', $room->id, $room->name];
        }
        $this->params['list_rooms'] = $list_rooms;
        $list_intensities = [];
        foreach($intensities as $intensity){
            $list_intensities[] = ['t', $intensity->id, $intensity->name];
        }
        $this->params['list_intensities'] = $list_intensities;

//        dump($this->params);

        return view('admin.schedule.edit', ['params' => $this->params]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'clubs_id' => 'required|integer|not_in:0',
            'training_id' => 'required|integer|not_in:0',
            'room_id' => 'required|integer|not_in:0',
            'intensity_id' => 'required|integer|not_in:0',
            'start_time' => 'required|date',
            'duration' => 'required|integer|not_in:0',
            'end_time' => 'required|date',
            'pre_entry' => 'sometimes|required|in:on',
            'paid' => 'sometimes|required|in:on',
            'show_age' => 'sometimes|required|in:on',
            'active' => 'sometimes|required|in:on',
            'sort' => 'required|integer',
            'age' => 'sometimes|required',

        ], [
            'not_in' => 'Значение не может быть равным 0',
            'integer' => 'Значение должно быть целое число',
            'required' => 'Обязательное',
            'date' => 'Должна быть дата',
            'in' => 'Не верное значение',
            'in_array' => 'Не верное значение массива'
        ]);
        $schedule = \App\Schedule::find($id);
        $schedule->clubs_id = $request->clubs_id;
        $schedule->trainings_id = $request->training_id;
        $schedule->rooms_id = $request->room_id;
        $schedule->intensities_id = $request->intensity_id;
        $schedule->start_time = $request->start_time;
        $schedule->duration = $request->duration;
        $schedule->end_time = $request->end_time;
        $schedule->pre_entry = (isset($request->pre_entry) ? true: false);
        $schedule->paid = (isset($request->paid) ? true: false);
        $schedule->show_age = (isset($request->show_age) ? true: false);
        $schedule->active = (isset($request->active) ? true: false);
        $schedule->sort = $request->sort;
        \App\ScheduleYear::where('schedules_id', $schedule->id)->delete();
        if(isset($request->age)){
            foreach($request->age as $age){
                \App\ScheduleYear::create([
                    'years_id' => (int)$age,
                    'schedules_id' => $schedule->id
                ]);
            }
        }

        $schedule->save();
        $date = new \DateTime($request->start_time);
        $id = $request->clubs_id . '_' . $date->format('Y') . '_' . $date->format('m') . '_' . $date->format('d');
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = \App\Schedule::find($id);
        \App\ScheduleYear::where('schedules_id', $schedule->id)->delete();
        $date = new \DateTime($schedule->start_time);
        $id = $schedule->clubs_id . '_' . $date->format('Y') . '_' . $date->format('m') . '_' . $date->format('d');
        $schedule->delete();
        return $this->show($id);
    }
}
