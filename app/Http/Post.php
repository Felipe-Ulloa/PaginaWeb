<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable=[

	'user_id','category_id','name','slug','excerpt','body','status','file'


	];

	// un post pertenece a u user o a una categoria pero puede tener varios tag

	public function user()
	{

	return $this->belongsTo(User::class);	
	} 

	public function category()
	{

	return $this->belongsTo(Category::class);	
	} 




     public function tags()
    {
        return $this->belongsToMany(Tag::class); // desde aca se hace el llamado al metodo "tags" en PostTableSeeders
    }
}
