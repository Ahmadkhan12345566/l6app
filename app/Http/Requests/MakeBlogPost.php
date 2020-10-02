<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeBlogPost extends FormRequest
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
           'title'=>'required',
           'photo'=>'required',
           'tos'=>'accepted',
           'web'=>'active_url',
           'dt'=>'required|date|before_or_equal:date',
       ];
    }

//    /**
//     * Get custom messages for validator errors.
//     *
//     * @return array
//     */
//    public function messages()
//    {
//        return ["required"=>"This filed is required"];
//    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return ["photo"=>"logo",
            'title'=>"Title",
            ];
    }
}
