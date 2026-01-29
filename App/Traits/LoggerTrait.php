<?php

namespace App\Traits;

trait LoggerTrait
{
    public function log(string $message, ?string $type = "INFO"): void
    {
        echo "[$type] " . $message . PHP_EOL;
    }
}