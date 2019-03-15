<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class PhoneController extends Controller
{
    private $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(2);
        $this->params['page'] = new \App\Page();
    }
    public function phone()
    {
        return view('work.phone', ['params' => $this->params]);
    }
}
