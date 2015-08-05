<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; 
use Request;
use Session;

class FicheController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Fiche Controller
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
	 * Show the fiches to the user.
	 *
	 * @return Response
	 */
	public function showAllFiches()
	{
		$fiches 	= \App\Fiche::all();
		$user 		= \Auth::user();
		return view('back.allFiches', compact('fiches','user'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showSingleFiche($id)
	{
		$fiche 		= 	\App\Fiche::find($id);
		$user 		= 	\Auth::user();
		$questions 	=	\App\Fiche::find($id)->question;

		return view('back.fiche', compact('fiche','user','questions'));
	}

	// CRUD Fiches -------------------------------------------------------------------->


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createFiche()
	{
		$fiches = \App\Fiche::all();
		$user 	= \Auth::user();
		return view('back.newFiche', compact('fiches','user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeFiche()
	{
		$input = Request::all();

		$input['published_at'] = Carbon::now();
		$user 	= \Auth::user();
		$fiche_id = \App\Fiche::create($input);
		Session::put('fiche_id', $fiche_id);

		return view('back.newQuestion', compact('fiche_id','user'));
	}

	/**
	 * edit the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editFiche($id)
	{
		$fiche = \App\Fiche::find($id);
		$user 	= \Auth::user();
		return view('back.editFiche', compact('fiche','user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateFiche(Requests\FicheRequest $request, $id)
	{
		$fiche = \App\Fiche::find($id);

		$fiche->update($request->all());

		return redirect()->to('fiches')->with('message', 'ok');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */	public function destroyFiche($id)
	{
		$fiche = \App\Fiche::find($id);
		$fiche->delete();
		return redirect('fiches');
	}


}	