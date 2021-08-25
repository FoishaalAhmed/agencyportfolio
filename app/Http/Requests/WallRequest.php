<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WallRequest extends FormRequest
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

            'company'     => ['required', 'string', 'max : 100'],
            'description' => ['nullable', 'string', 'max : 100'],
            'year'        => ['nullable', 'integer', 'min: 1971'],
            'service_id'  => ['required', 'integer', 'min:1'],
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [
                'photo' => ['mimes:jpeg,jpg,png,gif,webp', 'max:1000', 'required'],
            ];
        } else {

            return $rules + [
                'photo' => ['mimes:jpeg,jpg,png,gif,webp', 'max:1000', 'nullable'],
            ];
        }
    }
}
