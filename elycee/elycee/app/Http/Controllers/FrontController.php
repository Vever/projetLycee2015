<?php namespace App\Http\Controllers;

use DB;

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
		$posts = DB::table('posts')
                ->orderBy('id', 'desc')
                ->get();
		return view('home', compact('posts'));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showSingle($id)
	{
		$post 	= \App\Post::find($id);
		$posts = DB::table('posts')
                ->orderBy('id', 'desc')
                ->get();
		return view('singlePostFront', compact('post','posts'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function mentions()
	{
		return view('mentions');
	}
	/**
	 * Show the application index screen to the user.
	 *
	 * @return Response
	 */
	public function actu()
	{
		$posts = DB::table('posts')
                ->orderBy('id', 'desc')
                ->get();
		return view('actu', compact('posts'));
	}

}
