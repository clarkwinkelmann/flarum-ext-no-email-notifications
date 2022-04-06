<?php

namespace ClarkWinkelmann\NoEmailNotifications\Providers;

use Flarum\Foundation\AbstractServiceProvider;
use Illuminate\Support\Arr;

class NoEmailServiceProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->container->extend('flarum.notification.drivers', function ($drivers) {
            return Arr::except($drivers, 'email');
        });
    }
}
