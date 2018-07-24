<?php

namespace App\Helpers;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait ReceivesReplies
{
    /**
     * @return \App\Models\Reply[]
     */
    public function replies()
    {
        return $this->repliesRelation;
    }

    /**
     * @return \App\Models\Reply[]
     */
    public function latestReplies(int $amount = 5)
    {
        return $this->repliesRelation()->latest()->limit($amount)->get();
    }

    public function deleteReplies()
    {
        $this->repliesRelation()->delete();
    }

    /**
     * It's important to name the relationship the same as the method because otherwise
     * eager loading of the polymorphic relationship will fail on queued jobs.
     *
     * @see https://github.com/laravelio/portal/issues/350
     */
    public function repliesRelation(): MorphMany
    {
        return $this->morphMany(Reply::class, 'repliesRelation', 'replyable_type', 'replyable_id');
    }
}
