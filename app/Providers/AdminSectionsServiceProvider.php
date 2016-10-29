<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\User::class => 'App\Http\Admin\Users',
        \App\Product::class => 'App\Http\Admin\Products',
        \App\Component::class => 'App\Http\Admin\Components',
        \App\Role::class => 'App\Http\Admin\Roles',
        \App\Sell::class => 'App\Http\Admin\Sells',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
