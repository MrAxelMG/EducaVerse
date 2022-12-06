<?php namespace App\Providers;

use Log;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\SocketHandler;
use Illuminate\Support\ServiceProvider;

class PaperTrailServiceProvider extends ServiceProvider {

    /**
     * Register Papertrail Service Provider
     *
     * @return void
     */
    public function register()
    {
        $monolog = Log::getLogger();
        $syslogHandler = new SocketHandler(env('PAPERTRAIL_URL'), env('PAPERTRAIL_PORT'));

        $formatter = new LineFormatter('%channel%.%level_name%: %message% %extra%');
        $syslogHandler->setFormatter($formatter);

        $monolog->pushHandler($syslogHandler);
    }
}