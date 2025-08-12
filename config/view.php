<?php

return [
    // Directories to search for views
    'paths' => [
        resource_path('views'),
    ],

    // Compiled Blade views output directory
    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

    // Optional settings with sensible defaults
    'relative_hash' => false,
    'cache' => true,
    'compiled_extension' => 'php',
    'check_cache_timestamps' => true,
];