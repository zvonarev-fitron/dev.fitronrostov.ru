<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $params = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->params['users'] = \App\User::all();
        return view('admin.users.index', ['params' => $this->params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->phone = preg_replace('/[^0-9]/', '', $request->phone);
        $validator = Validator::make($request->all(), [
            'login' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            ]
        );

        if($validator->fails()){
            return view('admin.users.create')->withErrors($validator)->with('old', $request);
        }
        else {
            \App\User::create([
                'login' => $request->login,
                'email' => $request->email,
                'phone' => $request->phone,
                'name' => $request->name,
                'surname' => $request->surname,
                'lastname' => $request->lastname,
                'active' => $request->active ?? 'on' == $request->active ? true : false,
                'password' => Hash::make($request->password)
            ]);
        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->params['roles_all'] = \App\Role::where('active', true)->get();
        $this->params['user'] = $user;
        $this->params['roles'] = $user->roles;
        return view('admin.users.edit', ['params' => $this->params]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [];
//        $request->phone = preg_replace('/[^0-9]/', '', $request->phone);
        foreach($request->all() as $key=>$value){
            if('_token' == $key) continue;
            if('_method' == $key) continue;
            if('password' == $key) continue;
            if('password_confirmation' == $key) continue;
            if('roles' == $key) continue;
            if('active' == $key) $user->$key = true;
            if('login' == $key && $user->$key != preg_replace('/\s+/', '', $value)) {
                $user->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['login'] = 'required|string|max:255|unique:users';
                continue;
            }
            if('email' == $key && $user->$key != preg_replace('/\s+/', '', $value)) {
                $user->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['email'] = 'required|string|email|max:255|unique:users';
                continue;
            }
            if('phone' == $key && $user->$key != preg_replace('/\s+/', '', $value)) {
                $user->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['phone'] = 'required|string|max:255|unique:users';
                continue;
            }
            if('name' == $key && $user->$key != preg_replace('/\s+/', '', $value)) {
                $user->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['name'] = 'required|string|max:255';
                continue;
            }
            if('surname' == $key && $user->$key != preg_replace('/\s+/', '', $value)) {
                $user->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['surname'] = 'required|string|max:255';
                continue;
            }
            if('lastname' == $key && $user->$key != preg_replace('/\s+/', '', $value)) {
                $user->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['lastname'] = 'required|string|max:255';
            }
        }
        if($rules){
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                $this->params['roles_all'] = \App\Role::where('active', true)->get();
                $this->params['user'] = $user;
                $this->params['roles'] = $user->roles;
                return view('admin.users.edit', ['params' => $this->params])->withErrors($validator);
            }
        }
        if(isset($request->password)) {
            $user->password = '';
            $validator = Validator::make($request->all(), [
                'password' => 'required|string|min:6|confirmed'
            ]);
            if($validator->fails()){
                $this->params['roles_all'] = \App\Role::where('active', true)->get();
                $this->params['user'] = $user;
                $this->params['roles'] = $user->roles;
                return view('admin.users.edit', ['params' => $this->params])->withErrors($validator);
            }
            $user->password = Hash::make($request->password);
        }
        if(isset($request->active)) $user->active = true;
        else $user->active = false;
        //Роли
        $user->roles()->detach();
        if(isset($request->roles)){
            $roles = [];
            foreach($request->roles as $key=>$value) $roles[] = $key;
            $user->roles()->attach($roles);
        }
        $user->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        return $this->index();
    }
}
