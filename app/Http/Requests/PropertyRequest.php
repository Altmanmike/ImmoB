<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            //            
            'title' => 'required|min:6|max:150',
            'category_id' => 'required|min:1|max:15',
            'type' => 'required|min:2|max:5',
            'furnished' => 'required|min:1|max:30',
            'photo' => 'required|max:100000', //mimes:jpeg,jpg,png marche pas bien
            'rooms' => 'required|min:1|max:15',
            'area' => 'required|min:2|max:15',        
            'description' => 'required|min:6|max:800',
            'user_id' => 'required|min:1|max:25',
            'user_phone' => 'required|min:1|max:50',
            'user_mail' => 'required|min:5|max:50',
            'price' => 'required|min:2|max:25'            
        ];
    }
}
