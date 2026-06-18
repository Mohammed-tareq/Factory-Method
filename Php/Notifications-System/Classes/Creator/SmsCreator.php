<?php

namespace NotificationsSystem\Classes\Creator;
 use NotificationsSystem\Classes\Handle\SmsNotification;
 use NotificationsSystem\Contracts\Abstract\NotificationCreato;
 use NotificationsSystem\Contracts\Abstract\NotificationHandle;
 use NotificationsSystem\Contracts\Interfaces\SendNotification;

 class SmsCreator extends NotificationHandle
{
    private $phoneNumber, $message;

    public function __construct(string $phoneNumber, string $message)
    {
        $this->phoneNumber = $phoneNumber;
        $this->message = $message;
    }

    public function getNotificationType(): SendNotification
    {
        return new SmsNotification($this->phoneNumber, $this->message);
    }
}