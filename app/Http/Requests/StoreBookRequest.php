<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'book_title' => "required|min:3|max:255",
            'book_available_stock' => "required|min:1|integer",
            'book_category_id' => "required",
            'user_id' => "required",
            'book_description' => "required|min:2",
            'book_file' => "required|mimes:pdf",
            'book_image_cover' => "required|mimes:png,jpg,jpeg,webp",
        ];
    }
}
