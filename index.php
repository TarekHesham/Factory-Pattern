<?php

/**
 * This file for a factory method pattern learning from guru
 * https://refactoring.guru/design-patterns/factory-method/php/example#example-1
 */

// Product Interface
interface NotificationInterface
{
    public function send($content): void;
}

// Creator
abstract class Notifier
{
    abstract public function getNotification(): NotificationInterface;

    public function notify($content): void
    {
        $notification = $this->getNotification();
        $notification->send($content);
    }
}

// Concrete Creators
class EmailNotifier extends Notifier
{
    public function getNotification(): NotificationInterface
    {
        return new EmailNotification();
    }
}

class SMSNotifier extends Notifier
{
    public function getNotification(): NotificationInterface
    {
        return new SMSNotification();
    }
}

class PushNotifier extends Notifier
{
    public function getNotification(): NotificationInterface
    {
        return new PushNotification();
    }
}

// Concrete Products
class EmailNotification implements NotificationInterface
{
    public function send($content): void
    {
        echo "Email: " . $content . PHP_EOL;
    }
}

class SMSNotification implements NotificationInterface
{
    public function send($content): void
    {
        echo "SMS: " . $content . PHP_EOL;
    }
}

class PushNotification implements NotificationInterface
{
    public function send($content): void
    {
        echo "Push: " . $content . PHP_EOL;
    }
}

// Client Code
function clientCode(Notifier $notifier)
{
    $notifier->notify("Hello");
}

echo "Client: Executing the code with EmailNotifier:\n";
clientCode(new EmailNotifier());

echo "Client: Executing the code with SMSNotifier:\n";
clientCode(new SMSNotifier());

echo "Client: Executing the code with PushNotifier:\n";
clientCode(new PushNotifier());
