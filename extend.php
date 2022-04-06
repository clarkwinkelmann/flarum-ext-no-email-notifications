<?php

namespace ClarkWinkelmann\NoEmailNotifications;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js'),

    (new Extend\ServiceProvider())
        ->register(Providers\NoEmailServiceProvider::class),
];
