<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Permission\Permission;
use App\Models\Role\Role;
use App\Models\User\User;
use App\Policies\Permission\PermissionPolicy;
use App\Policies\Role\RolePolicy;
use App\Policies\User\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
