<?php

namespace App\Notifications;

use App\Contracts\NotificationInterface;
use App\Traits\LoggerTrait;

class PushNotification implements NotificationInterface
{
    use LoggerTrait;

    public function notify($message)
    {
        $this->log($message, "Push");
    }
}
