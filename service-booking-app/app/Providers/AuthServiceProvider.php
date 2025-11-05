<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Http\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        \App\Models\Service::class => \App\Policies\ServicePolicy::class,
        \App\Models\booking::class => \App\Policies\BookingPolicy::class,
    ];


    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate::define('index', function(User $user){
        //     return $user->role=="admin";
        // });
        //   Gate::define('index-service', function ($user) {
        //     return $user->role === 'admin';
        // });
    }
}
