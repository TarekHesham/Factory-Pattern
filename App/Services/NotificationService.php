<?php

namespace App\Services;

use App\Factories\NotificationFactory;

class NotificationService
{
    public function notify(string $type, string $message): void
    {
        try {
            $notification = NotificationFactory::create($type);
            $notification->notify($message);
        } catch (\Exception $e) {
            echo "Notification failed: " . $e->getMessage() . PHP_EOL;
        }
    }
}
