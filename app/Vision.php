<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
     protected $fillable = [
        'user_id', 'vision' , 'mision'
    ];
}
