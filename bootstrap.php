<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Collection;
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\Authentik\Provider;

return function (Dispatcher $events, Filter $filter) {
    $events->listen(SocialiteWasCalled::class, function (SocialiteWasCalled $event) {
        $event->extendSocialite('authentik', Provider::class);
    });

    config(['services.authentik' => [
        'base_url' => env('AUTHENTIK_BASE_URL'),
        'client_id' => env('AUTHENTIK_CLIENT_ID'),
        'client_secret' => env('AUTHENTIK_CLIENT_SECRET'),
        'redirect' => env('AUTHENTIK_REDIRECT_URI')
    ]]);

    $filter->add('oauth_providers', function (Collection $providers) {
        $providers->put('authentik', [
            #'icon' => 'users',
            'displayName' => 'Authentik',
        ]);
        return $providers;
    });
};
