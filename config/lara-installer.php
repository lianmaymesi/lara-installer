<?php

return [
    'php_version_id' => env('LI_PHP_VERSION_ID', 80012), // 8.0.12 => 8 * 10000 + 0 * 100 + 12

    'app_version' => env('LI_APP_VERSION', '1.0.0'),

    'redirect_to' => env('LI_REDIRECT_TO', 'home')
];
