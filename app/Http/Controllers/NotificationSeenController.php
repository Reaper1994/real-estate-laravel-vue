<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Notifications\DatabaseNotification;

class NotificationSeenController extends Controller
{
    /**
     * @throws AuthorizationException
     */
    public function __invoke(DatabaseNotification $notification): \Illuminate\Http\RedirectResponse
    {
//        $this->authorize('index', $notification);
        $notification->markAsRead();

        return redirect()->back()
            ->with('success', 'Notification marked as read');
    }
}
