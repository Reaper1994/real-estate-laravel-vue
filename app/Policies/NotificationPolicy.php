<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Notifications\DatabaseNotification;

class NotificationPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param DatabaseNotification $databaseNotification
     * @return bool
     */
    public function update(User $user, DatabaseNotification $databaseNotification)
    {
        return $user->id === $databaseNotification->notifiable_id;
    }
}
