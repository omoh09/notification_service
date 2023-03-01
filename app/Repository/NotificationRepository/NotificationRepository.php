<?php

namespace App\Repository\NotificationRepository;

use App\Helpers\Helper;

class NotificationRepository extends NotificationRepositoryInterface
{
    public function getNotificationSetting()
    {
        $array = [
            'notification_on' => (bool) auth()->user()->notification_on,
            'post_notification' => (bool) auth()->user()->post_notification,
        ];

        return Helper::response('sucess','user notification settings' , 200, $array);
    }

    public function deleteNotification($id)
    {
        auth()->user()->notifications()->find($id)->delete();
    }
}