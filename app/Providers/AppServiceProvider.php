<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\SiteSettings;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
//        $siteSettings = SiteSettings::all();
//        view()->share('siteSettings', $siteSettings);
        Gate::define('Admin', function(User $user){return $user->role_id == Role::IS_ADMIN;});
        Gate::define('Student', function(User $user){return $user->role_id == Role::IS_STUDENT;});
        Gate::define('Teacher', function(User $user){return $user->role_id == Role::IS_TEACHER;});
    }
}
