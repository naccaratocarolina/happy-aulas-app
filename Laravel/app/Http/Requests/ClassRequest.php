<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'class_date' => 'required|date',
            'class_time' => 'required|date_format:H:i',
            //'user_id' => 'required',
            'location' => 'required',
            'teacher_name' => 'required',
            //'teacher_id' => 'required',
            'subject_name' => 'required'
        ];
    }
}
