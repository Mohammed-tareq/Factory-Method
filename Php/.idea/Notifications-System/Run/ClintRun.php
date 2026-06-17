<?php

use NotificationsSystem\Contracts\Abstract\NotificationHandle;

function sendNotification(NotificationHandle $notificationHandle)
{
    $notificationHandle->send();
}





// Example usage
// sendNotification(new SmsCreator(1234567890, "Hello via SMS!"));
// sendNotification(new EmailCreator("user@example.com", "Hello via Email!"));