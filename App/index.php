<?php

// Load classes same as Laravel !
require_once __DIR__ . '/autoload.php';

use App\Services\NotificationService;

// Use cases to test notification service
$notificationService = new NotificationService();
$notificationService->notify('email', 'Hello, this is a test email notification.');
$notificationService->notify('sms',   'Hello, this is a test SMS notification.');
$notificationService->notify('push',  'Hello, this is a test push notification.');

// Invalid type
$notificationService->notify('facebook', 'Hello, this is a test push notification.');