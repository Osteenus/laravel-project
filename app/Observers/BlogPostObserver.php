<?php

namespace App\Observers;

use App\Models\BlogPost;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BlogPostObserver
{
    public function creating(BlogPost $blogPost)
    {
        $this->setPublishedAt($blogPost);
        $this->setSlug($blogPost);
    }

    /**
     * @param BlogPost $blogPost
     */
    public function updating(BlogPost $blogPost)
    {

//        $test[] = $blogPost->isDirty();
//        $test[] = $blogPost->isDirty('is_published');
//        $test[] = $blogPost->isDirty('user_id');
//        $test[] = $blogPost->getAttribute('is_published');
//        $test[] = $blogPost->is_published;
//        $test[] = $blogPost->getOriginal('is_published');
//        dd($test);

        $this->setPublishedAt($blogPost);
        $this->setSlug($blogPost);

    }
    /**
     * Handle the BlogPost "created" event.
     *
     * @param  \App\Models\BlogPost  $BlogPost
     * @return void
     */
    public function created(BlogPost $BlogPost)
    {
        //
    }

    /**
     * Handle the BlogPost "updated" event.
     *
     * @param  \App\Models\BlogPost  $BlogPost
     * @return void
     */
    public function updated(BlogPost $BlogPost)
    {
        //
    }

    /**
     * Handle the BlogPost "deleted" event.
     *
     * @param  \App\Models\BlogPost  $BlogPost
     * @return void
     */
    public function deleted(BlogPost $BlogPost)
    {
        //
    }

    /**
     * Handle the BlogPost "restored" event.
     *
     * @param  \App\Models\BlogPost  $BlogPost
     * @return void
     */
    public function restored(BlogPost $BlogPost)
    {
        //
    }

    /**
     * Handle the BlogPost "force deleted" event.
     *
     * @param  \App\Models\BlogPost  $BlogPost
     * @return void
     */
    public function forceDeleted(BlogPost $BlogPost)
    {
        //
    }

    protected function setPublishedAt(BlogPost $blogPost)
    {
        $needSetPublished = empty($blogPost->published_at) && $blogPost['is_published'];
        if ($needSetPublished) {
            $blogPost['published_at'] = Carbon::now();
        }
    }

    protected function setSlug(BlogPost $blogPost)
    {
        if (empty($blogPost['slug'])) {
            $blogPost['slug'] = Str::slug($blogPost['title']);
        }
    }
}
