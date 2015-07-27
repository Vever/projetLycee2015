<?php namespace App\Http\Controllers;

class FrontController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Show the application index screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = \App\Post::all();
		return view('home', compact('posts'));
	}


	/**
	 * Show the application category screen to the user.
	 *
	 * @return Response
	 */
	public function showCategory($id)
	{	
		$categories = \App\Category::all();
		$category = \App\Category::find($id);
		return view('category', compact('category','categories'));
	}

	public function contact()
	{
		return view('contact');
	}
	
	public function friends()
	{
		return view('friends');
	}
}
