<?php

/**
 * Configurations for Doctrine.
 *
 * @var array
 */
return [
    'developer_mode' => env('ENVIRONMENT', 'production') == 'development',
    'model_paths'    => [ base('src/Models') ],
    'proxy_path'     => base('src/Proxies'),
];
