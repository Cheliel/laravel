<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirectiveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->bladeDirective();
    }


    public function bladeDirective(){

        Blade::directive('asset', function ($expression) {
            return "<?php mix ($expression) ?>";
        });

        Blade::directive('route', function ($expression) {
            return "<?php echo e(route($expression)) ?>";
        });

        
        Blade::directive('debug', function ($expression) {
            return "<?php dd($expression) ?>";
        });

        Blade::directive('isUrl', function ($expression) {
            return "<?php \Str::isUrl($expression) ?>";
        });
    }

}
