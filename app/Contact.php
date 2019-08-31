<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $fillable = [
        'user_id' , 'name','email','subject','body'
    ];
}
