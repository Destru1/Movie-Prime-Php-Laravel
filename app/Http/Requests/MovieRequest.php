<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'movie_name' => 'required|min:5|max:255',
            'release_year' => 'required|numeric|min:1960|max:2030',
            'language' => 'required|min:3|max:255',

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
            'movie_name.required' =>'Movie name is required.',
            'movie_name.min' =>'Movie name must be between 5 and 255 characters.',
            'movie_name.max' =>'Movie name must be between 5 and 255 characters.',



        ];
    }
}
