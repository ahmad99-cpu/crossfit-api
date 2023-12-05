<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoresessionRequest extends FormRequest
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
            'startTime' => 'required|string',
            'endTime' => 'required|string',
            'instructor_id' => 'required|exists:insturctors,id',
            'gym_classes_id' => 'required|exists:gym_classes,id',
        ];
    }
}
