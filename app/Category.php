<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function article()
    {
        return $this->hasMany('App\Post');
    }
}
