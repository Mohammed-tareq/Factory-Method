<?php
namespace NotificationsSystem\Contracts\Abstract;
use NotificationsSystem\Contracts\Interfaces\SendNotification;

abstract class NotificationHandle
{
    abstract public  function getNotificationType(): SendNotification;


    public function sendNotification()
    {
        $notificationType = $this->getNotificationType();
        $notificationType->send();
    }

}