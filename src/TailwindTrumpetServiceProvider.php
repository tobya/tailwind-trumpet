<?php

namespace Tobya\TailwindTrumpet;

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
            ->hasViews()
         //   ->hasMigration('create_tailwind-trumpet_table')
            ->hasCommand(TailwindTrumpetCommand::class);
    }

        public function boot()
    {
        $this->app->singleton(\Tobya\TailwindTrumpet\TailwindTrumpet::class, function () {
            return new \Tobya\TailwindTrumpet\TailwindTrumpet();
        });

        $this->app->singleton(TailwindTrumpet::class);

          $this->publishes([
             __DIR__.'/../config/trumpet.php' => config_path('trumpet.php'),
        ]);

              if ($this->app->runningInConsole()) {
                $this->commands([
                    TailwindTrumpetCommand::class,

                ]);
             }
    }
}
