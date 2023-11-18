<?php

namespace Coleus\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('ui', function ($app) {
            return new Ui();
        });
    }

    public function boot()
    {
        //
    }
    // public function configurePackage(Package $package): void
    // {
    //     /*
    //      * This class is a Package Service Provider
    //      *
    //      * More info: https://github.com/spatie/laravel-package-tools
    //      */
    //     $package
    //         ->name('ui')
    //         ->hasConfigFile()
    //         ->hasViews()
    //         // ->hasMigration('create_ui_table')
    //         ->hasCommand(UiCommand::class);
    // }
}
