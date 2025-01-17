<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'name',
    ];

        /**
    * Get the post that owns the comment.
    */
    public function post()
    {
    return $this->belongsTo('App\Post');
    }

}
