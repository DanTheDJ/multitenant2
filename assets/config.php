<?php

return [

    'resolver' => [
        'cache' => [
            'enabled' => env('MULTITENANT_RESOLVER_CACHE_ENABLED', false),
            'ttl_seconds' => 3600
        ]
    ]

];