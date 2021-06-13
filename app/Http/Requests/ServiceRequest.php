<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [

            'name' => 'required|string|max:255',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'icon'        => 'mimes:jpeg,jpg,png,gif,webp|max:100|required',
                'slug'        => 'required|string|max: 255|unique:services,slug',
                'description' => 'required|string|max: 255',

            ];

        } else {

            return $rules + [

                'icon'        => 'mimes:jpeg,jpg,png,gif,webp|max:100|nullable',
                'description' => 'nullable|string|max:255',
                'slug'        => 'required|string|max:255|unique:services,slug,'. $this->service,

            ];
        }
    }
}
