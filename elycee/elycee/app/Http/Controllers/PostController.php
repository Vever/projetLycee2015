<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; 
use Request;
use Session;

class PostController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Post Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the posts to the user.
	 *
	 * @return Response
	 */
	public function showAllPosts()
	{
		$posts 		= \App\Post::all();
		$user 		= \Auth::user();

		return view('back.all', compact('posts','user'));
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
		$user 	= \Auth::user();

		return view('back.single', compact('post','user'));
	}

	// CRUD Posts -------------------------------------------------------------------->


		/**
		 * Show the form for creating a new resource.
		 *
		 * @return Response
		 */
		public function create()
		{
			$posts = \App\Post::all();
			$user 	= \Auth::user();
			return view('back.newPost', compact('posts','user'));
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
			$user 	= \Auth::user();
			return view('back.editPost', compact('post','user'));
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