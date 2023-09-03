<?php

namespace App\Providers;

use App\Repository\Admins\AdminRepository;
use App\Repository\Admins\AdminRepositoryInterface;
use App\Repository\Teachers\TeacherRepository;
use App\Repository\Teachers\TeacherRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
