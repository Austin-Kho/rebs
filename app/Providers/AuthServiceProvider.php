<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::before(function ($user) {
            // 관리자일 때는 이하 로직을 수행하지 않는다.
            return $user->isAdmin() ? true : null;
        });

        Gate::define('update', function ($user, $model) {
            return $user->id === $model->user->id;
        });

        Gate::define('delete', function ($user, $model) {
            return $user->id === $model->user->id;
        });
    }
}
