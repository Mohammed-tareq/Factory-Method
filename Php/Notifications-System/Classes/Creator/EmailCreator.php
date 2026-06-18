<?php

namespace NotificationsSystem\Classes\Creator;

use NotificationsSystem\Classes\Handle\EmailNotification;
use NotificationsSystem\Contracts\Abstract\NotificationHandle;
use NotificationsSystem\Contracts\Interfaces\SendNotification;

class EmailCreator extends NotificationHandle
{
    private $email, $subject, $message;

    public function __construct(string $email, string $subject, string $message)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function getNotificationType(): SendNotification
    {
        return new EmailNotification($this->email, $this->subject, $this->message);
    }

}