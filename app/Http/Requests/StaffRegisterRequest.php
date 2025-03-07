<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRegisterRequest extends FormRequest
{
    public function authorize()
    {
        // Change to true if all users or specific logic if roles apply
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|lowercase|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,staff,customer',
            'salary' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'This email address is already taken.',
            'password.confirmed' => 'The password confirmation does not match.',
            'salary.numeric' => 'The salary must be a number.',
        ];
    }
}
