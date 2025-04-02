<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WriteMessageRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'nullable|email|required_without:phone',
            'phone' => [
                'nullable',
                'regex:/^\+380\d{9}$/',
                'required_without:email'
            ],
            'message' => 'required|string',
        ];
    }

    public function messages(): array{
        return [
            'phone.regex' => 'Номер телефону повинен починатися з +380 і містити 9 цифр після коду країни.',
        ];
    }
}
