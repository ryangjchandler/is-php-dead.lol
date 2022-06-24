<?php

use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(realpath(__DIR__ . '/../'));
$dotenv->load();

if (! function_exists('env')) {
    function env(string $key, mixed $default = null): mixed {
        return $_ENV[$key] ?? $default;
    }
}

if (! function_exists('asset')) {
    function asset(string $path): string {
        return env('APP_URL') . '/' . trim($path, '/');
    }
}