<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [

            'name'     => 'required|string|max: 255',
            'position' => 'required|string|max: 255',
            'facebook' => 'nullable|string|max: 255',
            'twitter'  => 'nullable|string|max: 255',
            'linkedin' => 'nullable|string|max: 255',
            'priority' => 'required|numeric',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:10000|required',
            ];
        } else {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:10000|nullable',
            ];
        }
    }
}
