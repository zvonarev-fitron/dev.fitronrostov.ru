<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Role extends Model
{
    protected $fillable = ['title', 'name', 'active'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'roles_users', 'role_id', 'user_id');
    }
}

