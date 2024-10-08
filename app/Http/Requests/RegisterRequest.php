<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => "required|email:dns,rfc|unique:users,email|min:3|max:255",
            'password' => "required|confirmed|min:8|max:255",
            'password_confirmation' => "required|min:8|max:255|same:password",
        ];
    }
}
