<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [

            'photo'  => 'mimes:jpeg,jpg,png,gif,webp|max:10000|nullable',
            'text'   => 'required|string',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'name'    => 'required|string|max:255|unique:pages,name',
                'slug'    => 'required|string|max:255|unique:pages,slug',
            ];

        } else {

            return $rules + [

                'name'    => 'required|string|max:255|unique:pages,name,'.$this->page,
                'slug'    => 'required|string|max:255|unique:pages,slug,'.$this->page,
            ];
        }
    }
}
