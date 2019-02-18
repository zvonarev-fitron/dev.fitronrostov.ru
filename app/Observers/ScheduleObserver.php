<?php

namespace App\Observers;

use App\Schedule;
use App\ScheduleYear;

class ScheduleObserver
{
    /**
     * Handle the schedule "created" event.
     *
     * @param  \App\Schedule  $schedule
     * @return void
     */
    public function created(Schedule $schedule)
    {
        //
    }

    /**
     * Handle the schedule "updated" event.
     *
     * @param  \App\Schedule  $schedule
     * @return void
     */
    public function updated(Schedule $schedule)
    {
        //
    }

    public function deleting(Schedule $schedule)
    {
        ScheduleYear::where('schedules_id', $schedule->id)->delete();
    }

    /**
     * Handle the schedule "deleted" event.
     *
     * @param  \App\Schedule  $schedule
     * @return void
     */
    public function deleted(Schedule $schedule)
    {
        //
    }

    /**
     * Handle the schedule "restored" event.
     *
     * @param  \App\Schedule  $schedule
     * @return void
     */
    public function restored(Schedule $schedule)
    {
        //
    }

    /**
     * Handle the schedule "force deleted" event.
     *
     * @param  \App\Schedule  $schedule
     * @return void
     */
    public function forceDeleted(Schedule $schedule)
    {
        //
    }
}
