<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'message' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'User\'s name field must not be empty',
            'name.min' => 'User\'s name must not be shorter than 3 symbols',
            'email.required' => 'User\'s email field must not be empty',
            'email.email' => 'User\'s email field must be a valid email address',
            'email.unique' => 'User with such email address already exists',
            'message' => 'User\'s message field must not be empty'
        ];
    }
}
