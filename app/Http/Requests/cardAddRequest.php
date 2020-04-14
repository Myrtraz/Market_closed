<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cardAddRequest extends FormRequest
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
        return [
            'cardName' => 'required',
            'creditCard' => 'required|min:16|max:16',
            'type' => 'required',
            'cvv' => 'required|min:3|max:3',
            'exp' => 'required',
            'exp2' => 'required',
        ];
    }
}
