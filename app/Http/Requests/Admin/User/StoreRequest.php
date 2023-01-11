<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field is required',
            'name.string' => 'The data must match the string type',
            'email.required' => 'This field is required',
            'email.string' => 'The data must match the string type',
            'email.email' => 'Your email must match the example name@some.domain',
            'email.unique' => 'User with this email already exists',
            'role.required' => 'This field is required',
            'role.integer' => 'The data must match the integer type',
        ];
    }
}
