<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderCreateRequest extends FormRequest
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
            'imagen'=>'required',
            'titulo1'=>'required',
            'titulo2'=>'required',
            'link'=>'required',
            'orden'=>'required|numeric',
        ];
    }
}
