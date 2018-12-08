<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class AboutusController extends Controller
{

    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(2);
        $this->params['page'] = new \App\Page();
    }

    public function mission()
    {
        $this->params['page']->menu = 'Миссия';
        $this->params['page']->code = 'mission';
        return view('aboutus.mission', ['params' => $this->params]);
    }

    public function boss()
    {
        $this->params['page']->menu = 'Руководство';
        $this->params['page']->code = 'boss';
        return view('aboutus.boss', ['params' => $this->params]);
    }

    public function vacancies()
    {
        $this->params['page']->menu = 'Вакансии';
        $this->params['page']->code = 'vacancies';
        return view('aboutus.vacancies', ['params' => $this->params]);
    }

    public function press()
    {
        $this->params['page']->menu = 'Пресса';
        $this->params['page']->code = 'press';
        return view('aboutus.press', ['params' => $this->params]);
    }

    public function franchise()
    {
        $this->params['page']->menu = 'Франчайзинг';
        $this->params['page']->code = 'franchise';
        return view('aboutus.franchise', ['params' => $this->params]);
    }

    public function corporate()
    {
        $this->params['page']->menu = 'Корпоративным клиентам';
        $this->params['page']->code = 'corporate';
        return view('aboutus.corporate', ['params' => $this->params]);
    }

    public function payment()
    {
        $this->params['page']->menu = 'Способы оплаты';
        $this->params['page']->code = 'payment';
        return view('aboutus.payment', ['params' => $this->params]);
    }
}
