<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
        $rules = match (true) {
            request()->book_file != null => ['book_file' => "required|mimes:pdf"],
            request()->book_image_cover != null => ['book_image_cover' => "required|mimes:png,jpg,jpeg,webp"],
            default => [
                'book_title' => "required|min:3|max:255",
                'book_available_stock' => "required|min:1|integer",
                'book_category_id' => "required",
                'book_description' => "required|min:2",
            ],
        };
//        $rules = ;
//
//        if (request()->book_file)
//        {
//            unset($rules);
//            $rules = ['book_file' => "required|mimes:pdf"];
//        }
//
//        if (request()->book_image_cover)
//        {
//            $rules['book_image_cover'] = "required|mimes:png,jpg,jpeg,webp";
//        }

        return $rules;
    }
}
