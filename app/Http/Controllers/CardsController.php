<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class CardsController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(8);
        $this->params['date'] = new \DateTime(date('Y-m-d'));
    }

    public function index()
    {
        $this->params['type_cards'] = \App\TypeCard::where('active', true)->get();
        $special = \App\Special::where('active', true)->get();
        $date = $this->params['date'];

        $this->params['special'] = $special->filter(function(\App\Special $special) use ($date){
            $start = is_null($special->start_active) ? true : (new \DateTime($special->start_active)) < $date;
            $end = is_null($special->end_active) ? true : (new \DateTime($special->end_active)) > $date;
            return $start && $end;
        });

        $this->params['special_type_cards_ids'] = [];

        foreach($this->params['special'] as $special){
            if(!in_array($special->type_card_id, $this->params['special_type_cards_ids'])) {
                $this->params['special_type_cards_ids'][] = $special->type_card_id;
            }
        }
        return view('cards.index', ['params' => $this->params]);
    }
}
