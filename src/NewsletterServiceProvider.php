<?php

namespace Vincenttarrit\Newsletter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vincenttarrit\Newsletter\Commands\NewsletterCommand;

class NewsletterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('infomaniak-newsletter-laravel')
            ->hasConfigFile();
    }
}
