<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; 
use Request;
use Session;

class QuestionController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Question Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	// CRUD Questions -------------------------------------------------------------------->

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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createQuestion()
	{
		$questions 	= \App\Question::all();
		$user 		= \Auth::user();
		$fiche_id 	= Session::get('fiche_id');
		
		return view('back.newQuestion', compact('questions','fiche_id','user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeQuestion()
	{
		$input 		= Request::all();
		$user 		= \Auth::user();
		$input['published_at'] = Carbon::now();
		$fiche_id 	= Session::get('fiche_id');
		$question = \App\Question::create($input);

		return view('back.newQuestion', compact('question','fiche_id','user'));
	}

	/**
	 * edit the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editQuestion($id)
	{
		$question 	= \App\Question::find($id);
		$fiche_id 	= Session::get('fiche_id');
		$user 		= \Auth::user();
		return view('back.editQuestion', compact('question','fiche_id','user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateQuestion(Requests\QuestionRequest $request, $id)
	{
		$question = \App\Question::find($id);
		$question->update($request->all());

		return redirect()->to('fiches')->with('message', 'ok');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */	public function destroyQuestion($id)
	{
		$question = \App\Question::find($id);
		$question->delete();
		return redirect()->back();
	}


}	