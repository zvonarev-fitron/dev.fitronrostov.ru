<?php

namespace App\Observers;
use Illuminate\Support\Facades\Storage;

use App\Slider;


class SliderObserver
{
    /**
     * Handle to the slider "created" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function created(Slider $slider)
    {
        //
    }

    /**
     * Handle the slider "updated" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function updated(Slider $slider)
    {
        //
    }

    /**
     * Handle the slider "deleted" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function deleted(Slider $slider)
    {
        //
    }

    public function deleting(Slider $slider)
    {
        foreach($slider->images as $image) Storage::delete($image->image);
        $slider->images()->delete();
    }
}
