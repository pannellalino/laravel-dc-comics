<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:2|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|numeric',
            'series' => 'required|min:2|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|min:2|max:50',
        ];
    }
}
