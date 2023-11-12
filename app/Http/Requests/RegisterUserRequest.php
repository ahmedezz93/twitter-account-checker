<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:8|confirmed',
            'password_confirmation'=>'required',
            'phone' => 'required|max:255',
            'file'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gender' => Rule::in(['male', 'female']),
            'email'=>'required|unique:users,email'
        ];
    }
}
