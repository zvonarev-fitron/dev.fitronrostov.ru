<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

//        dump('index');

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

//        dump(Auth::user()->roles[0]->title);

//        dump(Auth::id());

//        return view ('cabinet.index', ['params' => $this->params]);



//        dd(Auth::user()->can('admin'));


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

    //Расписание
    public function schedule()
    {
        $this->params['cabinet_page'] = 'cabinet.schedule';
        $this->params['active_menu'] = 'schedule';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Расписание
    public function schedule_trainer(Request $request)
    {
        $this->params['cabinet_page'] = 'cabinet.schedule_trainer';
        $this->params['active_menu'] = 'schedule';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Календарь
    public function calendar()
    {
        $this->params['cabinet_page'] = 'cabinet.calendar';
        $this->params['active_menu'] = 'calendar';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Активность
    public function active()
    {
        $this->params['cabinet_page'] = 'cabinet.active';
        $this->params['active_menu'] = 'active';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Депозит
    public function deposit()
    {
        $this->params['cabinet_page'] = 'cabinet.deposit';
        $this->params['active_menu'] = 'deposit';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Депозит пополнить
    public function deposit_replenish()
    {
        $this->params['cabinet_page'] = 'cabinet.deposit_replenish';
        $this->params['active_menu'] = 'deposit';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Оплатить с депозита
    public function deposit_payment_from()
    {
        $this->params['cabinet_page'] = 'cabinet.deposit_payment_from';
        $this->params['active_menu'] = 'deposit';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Мои услуги
    public function service()
    {
        $this->params['cabinet_page'] = 'cabinet.service';
        $this->params['active_menu'] = 'service';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Бонус
    public function bonus()
    {
        $this->params['cabinet_page'] = 'cabinet.bonus';
        $this->params['active_menu'] = 'bonus';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Тренера
    public function trainer()
    {
        $this->params['cabinet_page'] = 'cabinet.trainer';
        $this->params['active_menu'] = 'trainer';
        return view('cabinet.index', ['params' => $this->params]);
    }

    //Новости
    public function news()
    {
        $this->params['cabinet_page'] = 'cabinet.news';
        $this->params['active_menu'] = 'news';
        return view('cabinet.index', ['params' => $this->params]);
    }

    public function messages()
    {
        $this->params['active_menu'] = 'messages';
        return view('cabinet.messages', ['params' => $this->params]);
    }

    //Обратная связь
    public function feedback()
    {
        $this->params['cabinet_page'] = 'cabinet.feedback';
        $this->params['active_menu'] = 'feedback';
        return view('cabinet.index', ['params' => $this->params]);
    }
}
