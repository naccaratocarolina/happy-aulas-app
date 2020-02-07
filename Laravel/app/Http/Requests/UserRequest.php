<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\User;

class UserRequest extends FormRequest
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
            'nome' => 'required|alpha',
            'email' => 'required|email|unique',
            'password' =>'required|string',
            'c_password' =>'required|same:password',
            'profile_picture'=>'file|image|mimes:jpeg,png,gif,webp|max:2048',
          ];
    }
    public function messages(){
        return [
          'nome.alpha' => 'O nome deve consistir apenas em caracteres alfabéticos',
          'email.email' =>'Insira um email válido',
          'email.unique' =>'Este email já existe',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
      throw new HttpResponseException(response()->json($validator->errors(),422));
    }
}
}
