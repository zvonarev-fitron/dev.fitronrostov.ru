<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class PolicyController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(3);
        $this->params['page'] = new \App\Page();
    }

    public function index()
    {
        $this->params['page']->menu = 'Политика защиты и обработки персональных данных';
        $this->params['page']->code = 'policy';
        return view('policy.index', ['params' => $this->params]);
    }
}
