<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOurTeamPageRequest extends FormRequest
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
            'first_main_image' => 'required|string',
            'first_main_text' => 'required|string',

            'about_us_text' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'first_main_image.required' => 'Це поле не може бути пустим',
            'first_main_text' => 'Це поле не може бути пустим',

            'about_us_text' => 'Це поле не може бути пустим',
        ];
    }
}
