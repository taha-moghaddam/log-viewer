<?php

namespace Bikaraan\BCore\LogViewer;

use Illuminate\Support\ServiceProvider;

class LogViewerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-admin-logs');

        LogViewer::boot();
    }
}
