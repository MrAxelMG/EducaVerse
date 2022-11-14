<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('convert', function ($money) {
            return "<?php echo number_format($money, 2); ?>";
});

date_default_timezone_set('America/Mexico_City');
\Carbon\Carbon::setUTF8(true);
\Carbon\Carbon::setLocale(config('app.locale'));
setlocale(LC_ALL, 'es_MX', 'es', 'ES', 'es_MX.utf8');
}
}