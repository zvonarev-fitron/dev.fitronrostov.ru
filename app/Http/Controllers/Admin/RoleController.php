<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    protected $params;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->params['roles'] = \App\Role::all();
        return view('admin.roles.index', ['params' => $this->params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|string|max:255|unique:roles',
            'name' => 'required|string|max:255|unique:roles'
        ]);
        if($validator->fails()){
            return view('admin.roles.create')->withErrors($validator)->with('old', $request);
        }
        \App\Role::create([
            'title' =>$request->title,
            'name' => $request->name
        ]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $this->params['role'] = $role;
        return view('admin.roles.edit', ['params' => $this->params]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $rules = [];
        foreach($request->all() as $key=>$value){
            if('_token' == $key) continue;
            if('_method' == $key) continue;
            if('title' == $key && $role->$key != preg_replace('/\s+/', '', $value)) {
                $role->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['title'] = 'required|string|max:255|unique:roles';
                continue;
            }
            if('name' == $key && $role->$key != preg_replace('/\s+/', '', $value)) {
                $role->$key = $request->$key = preg_replace('/\s+/', '', $value);
                $rules['nane'] = 'required|string|max:255|unique:roles';
                continue;
            }
        }
        if($rules){
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                $this->params['role'] = $role;
                return view('admin.roles.edit', ['params' => $this->params])->withErrors($validator);
            }
        }
        if(isset($request->active)) $role->active = true;
        else $role->active = false;
        $role->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        try{
            $role->delete();
        }
        catch(\Exception $e){
          dd($e->getMessage());
        }
        return $this->index();
    }

    public function changeCB($field, $onoff, $id)
    {
        $r = DB::table('roles')->where('id', $id)->update([$field => $onoff]);
        return $r ? json_encode(['ok' => '1']) : json_encode(['errors' => ['Сообщение' => ['Ошибока'], 'field' => [$field], 'onoff' => [$onoff], 'id' => [$id], 'Результ' => $r ] ]);
    }
}
