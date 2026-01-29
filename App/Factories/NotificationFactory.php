<?php

namespace App\Factories;

use App\Contracts\NotificationInterface;
use App\Notifications\EmailNotification;
use App\Notifications\PushNotification;
use App\Notifications\SMSNotification;

// Simple factory pattern
class NotificationFactory
{
    public static function create(string $type): NotificationInterface
    {
        return match($type) {
            'email' => new EmailNotification(),
            'sms'   => new SMSNotification(),
            'push'  => new PushNotification(),
            default => throw new \Exception("Invalid notification type"),
        };
    }
}