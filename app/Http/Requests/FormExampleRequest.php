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
            'name'=>'required|unique:users,name|min:4',
            'email'=>'required|unique:users,email|email',
            'age'=>'required|numeric|min:18',
            'password'=>'min:4',
            'repeatPassword'=>'required_with:password|same:password|min:4',
        ];
    }

    public function messages()
    {
        return $message = [
            'name.required'=>'plz enter name',
            'name.unique'=>'name already exist',
            'name.min'=>'plz enter name more than 4 characters',
            'email.required' =>'plz enter email',
            'email.unique' =>'email already exist',
            'age.min' => 'Age must be on 18',
            'password.min'=> 'plz enter password more than 4 characters'
        ];
    }



}
