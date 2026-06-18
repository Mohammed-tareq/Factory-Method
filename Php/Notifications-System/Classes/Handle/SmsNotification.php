<?php
namespace NotificationsSystem\Classes\Handle;
use NotificationsSystem\Contracts\Interfaces\SendNotification;

class SmsNotification implements SendNotification
{
    private $phoneNumber, $message;

    public function __construct(string $phoneNumber, string $message)
    {
        $this->phoneNumber = $phoneNumber;
        $this->message = $message;
    }

    public function send()
    {
        // Simulate sending an SMS notification
        echo "Sending SMS to {$this->phoneNumber}: {$this->message}\n";
    }

}