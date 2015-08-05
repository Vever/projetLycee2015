<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; 
use Request;
use Session;

class BackController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Back Controller
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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts 		= \App\Post::all();
		$posts 		= \App\Post::paginate(3);

		$users 		= \App\User::all();
		$users 		= \App\User::paginate(3);

		$fiches 	= \App\Fiche::all();
		$fiches 	= \App\Fiche::paginate(3);

		$user 		= \Auth::user();
		return view('back.index', compact('posts','users','fiches','user'));
	}


	/**
	 * Show the students.
	 *
	 * @return Response
	 */
	public function showAllStudents()
	{
		$users 	= \App\User::all();
		$user 	= \Auth::user();
		return view('back.allStudents', compact('users','user'));
	}


}
