<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

use Auth;
use App\Role;
use App\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dump(Group::all());

//        $groups = Group::find([1,2]);
//
//        foreach($groups as $group){
//            dump($group->original);
//        }
//
//        return view('admin');

//        $user = Auth::user();

//        $user = User::find(1);

//        $role = new Role(['title' => 'admin', 'name' => 'Администраторы']);
  //      $r = $user->roles()->create($role);

        //$r = $role->save();
//        dump($r);

//        dump($user);
//        dump($user->roles);
//        dump(Role::all());

        return view('admin');

    }
}
