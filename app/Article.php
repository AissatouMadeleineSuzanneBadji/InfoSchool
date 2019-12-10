<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function category()
    {
        return $this->belongsTo('App\Categories');
    }

    public function comment()
    {
        return $this->hasMany('App\Comments');
    }

}
