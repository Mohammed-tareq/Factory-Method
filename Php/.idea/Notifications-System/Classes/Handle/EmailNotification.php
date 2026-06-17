<?php

namespace NotificationsSystem\Classes\Handle;

use NotificationsSystem\Contracts\Interfaces\SendNotification;

class EmailNotification implements SendNotification
{
    private $email, $subject, $message;

    public function __construct(string $email, string $subject, string $message)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function send()
    {
        // Simulate sending an email notification
        echo "Sending Email to {$this->email} with subject '{$this->subject}': {$this->message}\n";
    }

}