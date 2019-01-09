<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Helpers\LoadHeader;

class CabinetController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(21);
    }
    public function index()
    {
        //$this->params['active_menu'] = 'cart';
//        dump($this->params);
//
//        dump(time());
//        dump(microtime());
//
//        $t = microtime();
//
//        dump((float)(explode(' ', $t)[1]) + (float)(explode(' ', $t)[0]));



//        dump($t);
//        $n_send = explode(' ', $t)[1] . explode('.', explode(' ', $t)[0])[1];
//        dump($n_send);


//        dump($request);
//        dump($request->user());
//        dump(Auth::check());
//        dump(Auth::user());
//        dump(Auth::id());

//        return view ('cabinet.index', ['params' => $this->params]);
        return $this->cart();
    }

    public function cart()
    {
        $this->params['active_menu'] = 'cart';
        $this->params['cabinet_page'] = 'cabinet.cart';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Купить новую карту
    public function cart_buy(Request $request)
    {
        $this->params['cabinet_page'] = 'cabinet.cart_buy';
        $this->params['active_menu'] = 'cart';
        return view('cabinet.index', ['params' => $this->params]);
    }

    public function cart_buy_new(Request $request)
    {
        $this->params['cabinet_page'] = 'cabinet.cart_new_buy';
        $this->params['active_menu'] = 'cart';
        return view('cabinet.index', ['params' => $this->params]);
    }

    public function cart_extend(Request $request)
    {
        $this->params['cabinet_page'] = 'cabinet.cart_extend';
        $this->params['active_menu'] = 'cart';
        return view('cabinet.index', ['params' => $this->params]);
    }

    public function cart_extend_buy(Request $request)
    {
        $this->params['cabinet_page'] = 'cabinet.cart_extend_buy';
        $this->params['active_menu'] = 'cart';
        return view('cabinet.index', ['params' => $this->params]);
    }

    public function schedule()
    {
        $this->params['active_menu'] = 'schedule';
        return view('cabinet.schedule', ['params' => $this->params]);
    }

    public function calendar()
    {
        $this->params['active_menu'] = 'calendar';
        return view('cabinet.calendar', ['params' => $this->params]);
    }

    public function active()
    {
        $this->params['active_menu'] = 'active';
        return view('cabinet.active', ['params' => $this->params]);
    }

    public function deposit()
    {
        $this->params['active_menu'] = 'deposit';
        return view('cabinet.deposit', ['params' => $this->params]);
    }

    public function service()
    {
        $this->params['active_menu'] = 'service';
        return view('cabinet.service', ['params' => $this->params]);
    }

    public function bonus()
    {
        $this->params['active_menu'] = 'bonus';
        return view('cabinet.bonus', ['params' => $this->params]);
    }

    public function trainer()
    {
        $this->params['active_menu'] = 'trainer';
        return view('cabinet.trainer', ['params' => $this->params]);
    }

    public function messages()
    {
        $this->params['active_menu'] = 'messages';
        return view('cabinet.messages', ['params' => $this->params]);
    }

    public function feedback()
    {
        $this->params['active_menu'] = 'feedback';
        return view('cabinet.feedback', ['params' => $this->params]);
    }
}
