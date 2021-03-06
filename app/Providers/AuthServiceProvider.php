<?php

namespace App\Providers;

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
        // Authorization
        $this->registerPolicies();
        $this->registerLandLordPolicies();

        // Gate::define('userman', 'App\Policies\LandLordPolicy@userman');
        // Gate::define('user-manager', 'App\Policies\LandLordPolicy@superadm');;
    }



    public function registerLandLordPolicies()
    {
        // Gate::define('create-post', function($user){
        //     $user->hasAccess(['create-post']);
        // });

        // Gate::define('update-post', function($user, \App\Post $post){
        //     return $user->hasAccess(['update-post']) or $user->id == $post->user_id;
        // });

        // Gate::define('publish-post', function($user){
        //     return $user->hasAccess(['publish-post']);
        // });

        // Gate::define('see-all-drafts', function($user){
        //     return $user->inRole(['administrator']);
        // });

        /** LandLord Gate Here */
        Gate::define('userman', function($user) {
            return $user->inRoles(['superadmin']);
        });
        Gate::define('userall', function($user) {
            return $user->inRoles(['superadmin', 'administrator']);
        });
        Gate::define('user', function($user) {
            return $user->inRoles(['administrator']);
        });
        // Gate::define('userman', function($user) {
        //     return $user->inRoles(['superadmin', 'administrator']);
        // });
    }
}
