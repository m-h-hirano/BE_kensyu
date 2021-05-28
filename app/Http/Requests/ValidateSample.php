<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSample extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'thread_title' => 'required',
            'thread_content' => 'required',
            
        ];
    }

    public function attributes()
{
    return [
        'thread_title' => 'スレッドのタイトル',
        'thread_content' => 'スレッドの内容',
        
    ];
}
}
