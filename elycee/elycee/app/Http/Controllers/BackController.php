<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; 
use Request;

class BackController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts 	= \App\Post::all();
		$posts 	= \App\Post::paginate(3);

		$users 	= \App\User::all();
		$users 	= \App\User
		::paginate(3);
		return view('back.index', compact('posts','users'));
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function showAllPosts()
	{
		$posts = \App\Post::all();
		return view('back.all', compact('posts'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showSingle($id)
	{
		$post = \App\Post::find($id);
		return view('back.single', compact('post'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$posts = \App\Post::all();
		return view('back.newPost', compact('posts'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

		$input['published_at'] = Carbon::now();
		
		\App\Post::create($input);

		return redirect('posts');
	}

	/**
	 * edit the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = \App\Post::find($id);
		return view('back.editPost', compact('post'));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\PostRequest $request, $id)
	{
		$post = \App\Post::find($id);

		$post->update($request->all());

		$imageName = $post->id . '.' . $request->file('url_thumbnail')->getClientOriginalExtension();

    	$request->file('url_thumbnail')->move(
    	    base_path() . '/public/images/', $imageName
   		 );

		return redirect()->to('posts')->with('message', 'ok');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */	public function destroy($id)
	{
		$post = \App\Post::find($id);
		$post->delete();
		return redirect('posts');
	}

}
