<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$basePathCandidates = [
    __DIR__,
    __DIR__.'/edu_pro',
    __DIR__.'/../edu_pro',
];

$basePath = null;

foreach ($basePathCandidates as $candidate) {
    if (file_exists($candidate.'/vendor/autoload.php') && file_exists($candidate.'/bootstrap/app.php')) {
        $basePath = $candidate;
        break;
    }
}

if ($basePath === null) {
    http_response_code(500);
    echo 'Laravel base path not found. Check index.php paths for your hosting layout.';
    exit;
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = $basePath.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require $basePath.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once $basePath.'/bootstrap/app.php';

$app->handleRequest(Request::capture());
