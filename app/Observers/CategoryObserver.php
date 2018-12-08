<?php

namespace App\Observers;
use Illuminate\Support\Facades\Storage;
use App\Category;

class CategoryObserver
{
    /**
     * Handle to the category "created" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        //
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    public function deleting(Category $category)
    {
        foreach($category->trainings as $training) Storage::delete($training->image);
        $category->trainings()->delete();
    }
}
