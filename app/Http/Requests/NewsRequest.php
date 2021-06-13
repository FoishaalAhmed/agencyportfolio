<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        $rules = [

            'title'         => 'required|string|max : 255',
            'date'          => 'required|date',
            'content'       => 'required|string',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'slug' => 'required|string|max:355|unique:news,slug',
                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:10000|required',
            ];
        } else {

            return $rules + [
                'photo'    => 'mimes:jpeg,jpg,png,gif,webp|max:10000|nullable',
                'slug' => 'required|string|max:355|unique:news,slug,' . $this->news,
            ];
        }
    }
}
