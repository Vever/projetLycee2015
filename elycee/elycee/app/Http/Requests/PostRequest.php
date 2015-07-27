<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request {


	public function messages()
	{
		return ['required' => 'ce :attribute champ est obligatoire'];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' 		=> 'required',
			'abstract' 		=> 'required',
			'content' 		=> 'required',
			'status' 		=> 'in:1,2',
		];
	}

}
