<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function PHPUnit\Framework\returnArgument;

class FormExampleRequest extends FormRequest
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
            'username'=>'required|min:4',
            'email'=>'required|email',
            'age'=>'required|numeric|min:18',
            'password'=>'min:4',
            'repeatPassword'=>'required_with:password|same:password|min:4',
        ];
    }

    public function messages()
    {
        return $message = [
            'username.required'=>'plz enter username',
        //    'username.unique'=>'username already exist',
            'username.min'=>'plz enter username more than 4 characters',
            'email.required' =>'plz enter email',
       //     'email.unique' =>'email already exist',
            'age.min' => 'Age must be on 18',
            'password.min'=> 'plz enter password more than 4 characters'
        ];
    }


}
