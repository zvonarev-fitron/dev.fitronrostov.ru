<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin', function(User $user){
            foreach($user->roles as $role) if('admin' == $role->title) return true;
            return false;
            //abort(404);
        });
        Gate::define('content', function(User $user){
            foreach($user->roles as $role) if('content' == $role->title) return true;
            return false;
            //abort(404);
        });
        Gate::define('adminpanel', function(User $user){
            return $user->can('admin') || $user->can('content');
        });
    }
}
