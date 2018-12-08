<?php

namespace App\Observers;

use App\Training;

class TrainingObserver
{
    /**
     * Handle to the training "created" event.
     *
     * @param  \App\Training  $training
     * @return void
     */
    public function created(Training $training)
    {
        //
    }

    /**
     * Handle the training "updated" event.
     *
     * @param  \App\Training  $training
     * @return void
     */
    public function updated(Training $training)
    {
        //
    }

    /**
     * Handle the training "deleted" event.
     *
     * @param  \App\Training  $training
     * @return void
     */
    public function deleted(Training $training)
    {
        //
    }

    public function deleting(Training $training)
    {
        \App\TrainingYear::where('training_id', $training->id)->delete();
    }
}
