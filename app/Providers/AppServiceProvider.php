<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Settings::find(1);

        view()->share([
            'logo' => $settings->logo,
            'footer_logo' => $settings->footer_logo,
            'email' => $settings->email,
            'copyright_text' => $settings->copyright_text,
            'favicon' => $settings->favicon
        ]);
    }
}
