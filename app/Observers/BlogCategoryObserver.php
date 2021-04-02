<?php

namespace App\Observers;

use App\Models\BlogCategory;

class BlogCategoryObserver
{
    /**
     * Handle the BlogCategory "created" event.
     *
     * @param  \App\Models\BlogCategory  $BlogCategory
     * @return void
     */
    public function created(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Handle the BlogCategory "updated" event.
     *
     * @param  \App\Models\BlogCategory  $BlogCategory
     * @return void
     */
    public function updated(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Handle the BlogCategory "deleted" event.
     *
     * @param  \App\Models\BlogCategory  $BlogCategory
     * @return void
     */
    public function deleted(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Handle the BlogCategory "restored" event.
     *
     * @param  \App\Models\BlogCategory  $BlogCategory
     * @return void
     */
    public function restored(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Handle the BlogCategory "force deleted" event.
     *
     * @param  \App\Models\BlogCategory  $BlogCategory
     * @return void
     */
    public function forceDeleted(BlogCategory $BlogCategory)
    {
        //
    }
}
