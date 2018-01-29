<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [//Copied from user model and edited
        'src', 'description',
    ];
}
