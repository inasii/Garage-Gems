<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:users_data,email',
            'phone_num' => 'nullable|string|max:20|regex:/^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/',
            'password' => 'nullable|string|min:8|confirmed',
            'roles' => 'required|in:admin,user',
        ];
    }
}
