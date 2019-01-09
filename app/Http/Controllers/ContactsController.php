<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LoadHeader;

class ContactsController extends Controller
{
    protected $params;

    public function __construct()
    {
        $this->params = LoadHeader::Start(17);
    }

    public function index()
    {
        dump($this->params);
        return view('contacts.index', ['params' => $this->params]);
    }
}
