<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'message',
        'name',
        'email',
        'phone',
        'read',
      ];
}