<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    { {
            $rules = [

                'date' => 'required|date',
                'last_date' => 'required|date',
                'position' => 'required|string|max:255',
                
                'description'  => 'required|string',
            ];

            if ($this->getMethod() == 'POST') {

                return $rules + [

                    'photo'    => 'mimes:jpeg,jpg,png,gif,webp|max:10000|required',

                ];
            } else {

                return $rules + [

                    'photo'    => 'mimes:jpeg,jpg,png,gif,webp|max:10000|nullable',

                ];
            }
        }
    }
}
