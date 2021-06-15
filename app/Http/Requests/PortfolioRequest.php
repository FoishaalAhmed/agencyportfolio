<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [

            'type'     => ['required','string', 'max:25'],
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo' => ['mimes:jpeg,jpg,png,gif,webp', 'max:10000', 'required'],
                'video' => ['required', 'required', 'max:255'],
            ];

        } else {

            return $rules + [

                'photo' => ['mimes:jpeg,jpg,png,gif,webp', 'max:100', 'nullable'],
                'video' => ['required', 'nullable', 'max:255'],
            ];
        }
    }
}
