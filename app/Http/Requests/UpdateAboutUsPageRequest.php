<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsPageRequest extends FormRequest
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

            'reasons_main_text' => 'required|string',
            'reason_title_1' => 'required|string',
            'reason_title_2' => 'required|string',
            'reason_title_3' => 'required|string',
            'reason_text_1' => 'required|string',
            'reason_text_2' => 'required|string',
            'reason_text_3' => 'required|string',

            'reviews_side_image' => 'required|string',
            'reviews' => 'required|array',
            'reviews.*.full_name' => 'required|string',
            'reviews.*.text' => 'required|string',

            'our_history_text' => 'required|string',
            'our_history_title_mark_1' => 'required|string',
            'our_history_title_mark_2' => 'required|string',
            'our_history_title_mark_3' => 'required|string',
            'our_history_title_mark_4' => 'required|string',
            'our_history_title_mark_5' => 'required|string',
            'our_history_image' => 'required|string',

            'employees' => 'required|array',
            'employees.*.full_name' => 'required|string',
            'employees.*.position' => 'required|string',
            'employees.*.image' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'first_main_image.required' => 'Це поле не може бути пустим',
            'first_main_text' => 'Це поле не може бути пустим',

            'reasons_main_text' => 'Це поле не може бути пустим',
            'reason_title_1' => 'Це поле не може бути пустим',
            'reason_title_2' => 'Це поле не може бути пустим',
            'reason_title_3' => 'Це поле не може бути пустим',
            'reason_text_1' => 'Це поле не може бути пустим',
            'reason_text_2' => 'Це поле не може бути пустим',
            'reason_text_3' => 'Це поле не може бути пустим',

            'reviews_side_image' => 'Це поле не може бути пустим',

            'our_history_text' => 'Це поле не може бути пустим',
            'our_history_title_mark_1' => 'Це поле не може бути пустим',
            'our_history_title_mark_2' => 'Це поле не може бути пустим',
            'our_history_title_mark_3' => 'Це поле не може бути пустим',
            'our_history_title_mark_4' => 'Це поле не може бути пустим',
            'our_history_title_mark_5' => 'Це поле не може бути пустим',
            'our_history_image' => 'Це поле не може бути пустим',

            'employees.required' => 'Це поле не може бути пустим',
            'employees.*.full_name.required' => 'Це поле не може бути пустим',
            'employees.*.position.required' => 'Це поле не може бути пустим',
            'employees.*.position.image' => 'Це поле не може бути пустим',

            'reviews.required' => 'Це поле не може бути пустим',
            'reviews.*.full_name.required' => 'Це поле не може бути пустим',
            'reviews.*.text.required' => 'Це поле не може бути пустим',
        ];
    }
}
