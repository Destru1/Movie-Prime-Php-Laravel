<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProducerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:2|max:255',
            'last_name' => 'required|min:2|max:255',
            'age' => 'required|min:16|max:99',
            'nationality' => 'required|min:4|max:255',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
           'first_name.required' =>'First name is required.',
           'first_name.min' =>'First name must be between 2 and 255 characters.',
           'first_name.max' =>'First name must be between 2 and 255 characters.',

           'last_name.required' =>'Last name is required.',
            'last_name.min' =>'Last name must be between 2 and 255 characters.',
            'last_name.max' =>'Last name must be between 2 and 255 characters.',

            'age.required' => 'Age is required',
            'age.min' => 'Age must be between 16 and 99.',
            'age.max' => 'Age must be between 16 and 99.',



        ];
    }
}
