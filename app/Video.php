<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [//Copied from user model and edited
        'src', 'description',
    ];
}
