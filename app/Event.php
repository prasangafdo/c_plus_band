<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [//Copied from user model and edited
        'date', 'time', 'venue', 'description',
    ];
}
