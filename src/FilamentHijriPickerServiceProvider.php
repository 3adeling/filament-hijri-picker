<?php

namespace MohamedSabil83\FilamentHijriPicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentHijriPickerServiceProvider extends PackageServiceProvider
{

    public static string $name = 'filament-hijri-picker';

    protected array $beforeCoreScripts = [
        'filament-hijri-picker' => __DIR__.'/../resources/dist/js/hijri-date-time-picker.js',
    ];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name(static::$name)
            ->hasViews();
    }
}
