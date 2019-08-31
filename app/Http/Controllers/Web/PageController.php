<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Team;
use App\Vision;
use App\Service;
use App\Post;
use App\Contact;
use App\Category;     // se da de alta la clase category

class PageController extends Controller
{
   

      public function home(){
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $teams = Team::orderBy('id','DESC')->paginate(3);
        $categories = Category::orderBy('id','DESC')->paginate(6);
        $services = Service::orderBy('id','DESC')->paginate(6);
        $visions = Vision::orderBy('id','DESC')->paginate(1);
        return view('home',compact('posts', 'teams','services', 'visions','categories'));
    }

    

    
       public function admin(){
        
        return view('auth.login');

     }

     public function blog(){
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.posts', compact('posts'));

     }

   

       
    public function category($slug){
    	$category = Category::where('slug',$slug)->pluck('id')->first();//con esto se obtiene el registro pero solo del ID
    	$posts = Post::where('category_id', $category)->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

    	return view('web.posts',compact('posts')); // retorna a la vista
    }

     // se refiere a que se consiga los post que contenga la etiqueta siempre y cuando estas etiquetas tengan el slug que se esta utilizando

		public function tag($slug){ 
        $posts = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);  
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.posts', compact('posts'));
	}

// se desiganara que se obtenga el post en base al slug
    public function post($slug){
    	$post = Post::where('slug',$slug)->first();

    	return view('web.post',compact('post'));
    }
}
