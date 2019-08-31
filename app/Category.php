<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[

	'name','slug','body'


	];


     public function posts()
    {
        return $this->hasMany(Post::class); // no es una relacion de muchos a muchos por eso no se ocupa el belongToMany es decir tiene muchos post
    }
}


