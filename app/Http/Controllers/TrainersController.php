<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class TrainersController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(16);
    }

    public function index($club = '', $type = '')
    {
        $this->params['type_trainer'] = \App\TypeTrainer::all();
        if($club)
            $club = explode(',', $club);
        else
            $club = [];

        if($type)
            $type = explode(',', $type);
        else
            $type = [];

        $trainers = \App\Trainer::where('active', true);

        if(!empty($type)){
            $trainers = $trainers->whereIn('type_trainers_id', $type);
            $this->params['query']['type'] = $type;
        }
        else {
            $this->params['query']['type'] = ['0'];
        }

        if(!empty($club)) {
            $trainers = $trainers->whereIn('clubs_id', $club);
            $this->params['query']['club'] = $club;
        }
        else {
            $this->params['query']['club'] = ['0'];
        }
        $this->params['trainers'] = $trainers->paginate(6);

        return view('trainers.index', ['params' => $this->params]);
    }

    public function trainer($id)
    {
        $this->params['trainer'] = \App\Trainer::find($id);
        $this->params['club_trainer'] = $this->params['trainer']->club;
        $this->params['type_trainer'] = $this->params['trainer']->type_trainer;

        $this->params['types_trainers'] = \App\TypeTrainer::all();

        $this->params['query']['type'][] = $this->params['type_trainer']->id;
        $this->params['query']['club'][] = $this->params['club_trainer']->id;

        return view('trainers.trainer', ['params' => $this->params]);
    }
}
