<?php

namespace App\Notifications;

use App\Contracts\NotificationInterface;
use App\Traits\LoggerTrait;

class EmailNotification implements NotificationInterface
{
    use LoggerTrait;

    public function notify($message)
    {
        $this->log($message, "Email");
    }
}