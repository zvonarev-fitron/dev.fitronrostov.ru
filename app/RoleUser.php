<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Role;

class RoleUser extends Model
{
    protected $table = 'roles_users';
    protected $fillable = ['user_id', 'role_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }
}
