<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
     protected $fillable = [
        'user_id', 'title','start_date','author','description','patent','start_date'
    ];
}
