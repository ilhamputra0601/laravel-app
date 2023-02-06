<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        // cara yang lebih flexsible menyisipkan table boolean database
        // make migratioan add_admin_to_users_table tanpa membuat table baru hanya existing tabel user no yes users
        Gate::define('admin', function(User $user) {
            return $user->role;
        });
    }
}
