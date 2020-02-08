<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Session;
class SessionRequest extends FormRequest
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
          'session_time'=>'required|date_format:H:i|ends_with:00,15,30,45',
          'session_date'=>'required|date',
          'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
          'address'=>'required',
          'user_id'=>'required|exist:users,id',
          'teacher_id'=>'required|exists:teachers,id',
        ];
    }
}
