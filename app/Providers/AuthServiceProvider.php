<?php

namespace App\Providers;

use App\Models\Opd;
use App\Models\Permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            Gate::define($permission->name, function ($user) use ($permission) {
                foreach ($permission->roles as $role) {
                    if ($user->hasRole($role->name)) return true;
                }
                return false;
            });
            Gate::define('kecamatan', function ($user) {
                return $user->opds->jenis == 'KECAMATAN';
            });
        }
    }
}
