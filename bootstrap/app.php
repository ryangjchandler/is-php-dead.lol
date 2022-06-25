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

if (! function_exists('production')) {
    function production(): bool {
        return $_ENV['APP_ENV'] === 'production';
    }
}

if (! function_exists('get_include_contents')) {
    function get_include_contents(string $filename): string|false {
        if (is_file($filename)) {
            ob_start();
            include $filename;
            return ob_get_clean();
        }
        return false;
    }
}

