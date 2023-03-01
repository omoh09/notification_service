<?php
namespace App\Repository\Notification;

use Illuminate\Http\Request;

interface NotificationRepositoryInterface
{
    public function getNotificationSetting();

    public function deleteNotification($id);
}