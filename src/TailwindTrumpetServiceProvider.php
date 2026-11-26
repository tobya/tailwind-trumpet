<?php

namespace Tobya\TailwindTrumpet;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tobya\TailwindTrumpet\Commands\TailwindTrumpetCommand;

class TailwindTrumpetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */

        $package
            ->name('tailwind-trumpet')
            ->hasConfigFile('trumpet')
           // ->hasViews()
         //   ->hasMigration('create_tailwind-trumpet_table')
            ->hasCommand(TailwindTrumpetCommand::class);
    }

    public function boot()
    {
        Blade::directive('tailwind', function ($value) {
            return config('trumpet.aliases.'.$value, ' ');
        });
    }
}
