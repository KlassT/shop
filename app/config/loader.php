<?php

use Phalcon\Loader;

require_once BASE_PATH . '/vendor/autoload.php';

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'App\Models' => APP_PATH . '/common/models/',
    'App'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'App\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'App\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php',
    'App\Modules\Backend\Module'  => APP_PATH . '/modules/backend/Module.php',
]);

$loader->register();
