<?php namespace App\Providers;

use Log;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\SyslogUdpHandler;
use Illuminate\Support\ServiceProvider;

class PaperTrailServiceProvider extends ServiceProvider {

    /**
     * Register Papertrail Service Provider
     *
     * @return void
     */
    public function register()
    {
        $monolog = Log::getMonolog();
        $syslogHandler = new SyslogUdpHandler(env('PAPERTRAIL_URL'), env('PAPERTRAIL_PORT'));

        $formatter = new LineFormatter('%channel%.%level_name%: %message% %extra%');
        $syslogHandler->setFormatter($formatter);

        $monolog->pushHandler($syslogHandler);
    }
}