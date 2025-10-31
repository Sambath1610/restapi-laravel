<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Event;
use App\Models\Attendee;

class GateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Gate::define('update-event', function (User $user, Event $event) {
        //     return $user->id === $event->user_id;
        // });

        // Gate::define('delete-attendee', function (User $user, Event $event, Attendee $attendee) {
        //     return $user->id === $event->user_id || $user->id === $attendee->user_id;
        // });
    }
}
