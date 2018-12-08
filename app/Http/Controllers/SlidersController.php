<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class SlidersController extends Controller
{
    protected $params;
    public function __construct()
    {
        $this->params = LoadHeader::Start(14);
        $this->params['date'] = new \DateTime(date('Y-m-d'));
    }
    public function gallery()
    {
        $this->params['code'] = 'main'; // 'gallery';
        $this->params['slider'] = \App\Slider::where('code', $this->params['code'])->first();
        $date = $this->params['date'];
        $this->params['images'] = $this->params['slider']->images->filter(function(\App\Image $image) use ($date){
            $start = is_null($image->start_time) ? true : (new \DateTime($image->start_time)) < $date;
            $end = is_null($image->end_time) ? true : (new \DateTime($image->end_time)) > $date;
            return $image->active && $start && $end;
        });
        return view('sliders.gallery', ['params' => $this->params]);
    }
}
