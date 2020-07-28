<?php

namespace App\Http\Controllers;	
use DB;
use App\Post;
class PostsController
{
	public function show($slug)
	{
		//$post = \DB:: table('posts')->where('slug',$slug)->first();
		
	
	//$post = Post::where('slug', $slug)->firstOrFail(); 		
	
	//if(!$post){
	//	abort(404,'Sorry page not found, under maintenance	');
	//}
    return view('post',[
    'post' => Post::where('slug', $slug)->firstOrFail()
    ]);

	}
	
}