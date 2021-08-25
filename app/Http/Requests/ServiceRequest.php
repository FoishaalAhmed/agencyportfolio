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
            'position' => 'required|numeric|min:1',
            'description' => 'required|string',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'icon'        => 'mimes:jpeg,jpg,png,gif,webp|max:1000|required',
                'slug'        => 'required|string|max: 255|unique:services,slug',
                
            ];

        } else {

            return $rules + [

                'icon'        => 'mimes:jpeg,jpg,png,gif,webp|max:100|nullable',
                'slug'        => 'required|string|max:255|unique:services,slug,'. $this->service,
            ];
        }
    }
}
