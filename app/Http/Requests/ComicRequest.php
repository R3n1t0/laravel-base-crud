<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
    public function rules(){
        return [
            'title'=>'required|max:255|min:3',
            'image'=>'required|max:255|min:10',
            'type'=>'required|max:255|min:3'
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Il campo title &eacute obligatorio',
            'title.max'=>'Il campo title puo avere al massimo :max caratteri',
            'title.min'=>'Il campo title puo avere minimo :min caratteri',
            'image.required'=>'Il campo image &eacute obligatorio',
            'image.max'=>'Il campo image puo avere al massimo :max caratteri',
            'image.min'=>'Il campo image puo avere minimo :min caratteri',
            'type.required'=>'Il campo type &eacute obligatorio',
            'type.max'=>'Il campo type puo avere al massimo :max caratteri',
            'type.min'=>'Il campo type puo avere minimo :min caratteri'
        ];
    }
}
