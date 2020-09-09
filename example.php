<?php
require_once(__DIR__ . '/vendor/autoload.php');

Sentry\init(['dsn' => 'YOUR_SENTRY_DSN' ]);

try {
    $this->functionFailsForSure();
} catch (\Throwable $exception) {
    Sentry\captureException($exception);
}

// OR

// Sentry\captureLastError();