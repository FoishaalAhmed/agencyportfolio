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
            'video' => ['required', 'required', 'max:255'],
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo' => ['mimes:jpeg,jpg,png,gif,webp', 'max:10000', 'required'],
            ];

        } else {

            return $rules + [

                'photo' => ['mimes:jpeg,jpg,png,gif,webp', 'max:10000', 'nullable'],
            ];
        }
    }
}
