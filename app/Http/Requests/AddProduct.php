<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProduct extends FormRequest
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
            'title'=> 'required',
            'description'=> 'required',
            'prices'=> 'required',
            'quantity'=> 'required',
            'status'=> 'required',
            'cover'=> 'required',
            'cover1'=> 'string',
            'cover2'=> 'string',
            'cover3'=> 'string',
        ];
    }
}
