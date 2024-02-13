<?php

namespace App\Observers;

use App\Models\Lending;

class LendingObserver
{
    /**
     * Handle the Lending "created" event.
     */
    public function created(Lending $lending): void
    {
        //
    }

    /**
     * Handle the Lending "updated" event.
     */
    public function updated(Lending $lending): void
    {
        //
    }

    /**
     * Handle the Lending "deleted" event.
     */
    public function deleted(Lending $lending): void
    {
        //
    }

    /**
     * Handle the Lending "restored" event.
     */
    public function restored(Lending $lending): void
    {
        //
    }

    /**
     * Handle the Lending "force deleted" event.
     */
    public function forceDeleted(Lending $lending): void
    {
        //
    }
}
