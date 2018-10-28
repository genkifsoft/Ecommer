<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validator;

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
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username không được để trống',
            'email.required' => 'Email không đúng định dạng',
            'password.min' => 'Mật khẩu tối thiểu 8 kí tự',
        ];
    }
}
