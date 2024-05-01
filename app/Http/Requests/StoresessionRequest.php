<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSessionRequest extends FormRequest
{
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
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'day' => 'required|string',
			'period' => 'required|string',
			'instructor_id' => 'required|exists:instructors,id',
			'gym_class_id' => 'required|exists:gym_classes,id',
		];
	}
}
