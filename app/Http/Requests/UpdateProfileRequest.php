<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        $rules = [
            'email' => "required|min:3|max:255",
            'username' => "required|min:3|max:255",
            'name' => "required|min:3|max:255",
            'birthday' => "required|min:3|max:255",
            'occupation' => "required|min:3|max:255",
        ];

        if (auth()->user()->email !== \request()->email)
        {
            $rules['email'] .= "|unique:users,email";
        }

        if (auth()->user()->username !== \request()->username)
        {
            $rules['username'] .= "|unique:users,username";
        }

        return $rules;
    }
}
