<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateJobRequest extends Request {

	

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required',
			'location' => 'required',
			'salary' => 'required',
			'web_link' => 'required',
			'companyName' => 'required',
			
		];
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

}
