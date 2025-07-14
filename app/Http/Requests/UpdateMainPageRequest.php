<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMainPageRequest extends FormRequest
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
            'first_main_title' => 'required|string|max:128',
            'first_main_text' => 'required|string',
            'first_main_btn_text' => 'required|string|max:32',

            'about_us_text' => 'required|string',
            'about_us_item_title_1' => 'required|string|max:32',
            'about_us_item_title_2' => 'required|string|max:32',
            'about_us_item_title_3' => 'required|string|max:32',
            'about_us_item_text_1' => 'required|string',
            'about_us_item_text_2' => 'required|string',
            'about_us_item_text_3' => 'required|string',

            'gallery_text' => 'required|string',
            'gallery' => 'required|array',
            'gallery.*.title' => 'required|string|max:32',
            'gallery.*.image' => 'required|string',
            'gallery.*.previewImage' => 'required_if:gallery.*.video,true',

            'faqs_text' => 'required|string',

            'sliders' => 'required|array',
            'sliders.*.title' => 'required|string|max:32',
            'sliders.*.text' => 'required|string',
            'sliders.*.image' => 'required|string',

            'faqs' => 'required|array',
            'faqs.*.question' => 'required|string',
            'faqs.*.answer' => 'required|string',

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
            'first_main_title.required' => 'Це поле не може бути пустим',
            'first_main_title.max' => 'Це поле повинно містити менше ніж 128 символів',
            'first_main_text' => 'Це поле не може бути пустим',
            'first_main_btn_text.required' => 'Це поле не може бути пустим',
            'first_main_btn_text.max' => 'Це поле повинно містити менше ніж 32 символи',


            'about_us_text.required' => 'Це поле не може бути пустим',
            'about_us_item_title_1.required' => 'Це поле не може бути пустим',
            'about_us_item_title_1.max' => 'Це поле повинно містити менше ніж 32 символи',
            'about_us_item_title_2.required' => 'Це поле не може бути пустим',
            'about_us_item_title_2.max' => 'Це поле повинно містити менше ніж 32 символи',
            'about_us_item_title_3.required' => 'Це поле не може бути пустим',
            'about_us_item_title_3.max' => 'Це поле повинно містити менше ніж 32 символи',
            'about_us_item_text_1.required' => 'Це поле не може бути пустим',
            'about_us_item_text_2.required' => 'Це поле не може бути пустим',
            'about_us_item_text_3.required' => 'Це поле не може бути пустим',

            'gallery_text' => 'Це поле не може бути пустим',

            'faqs_text' => 'Це поле не може бути пустим',

            'sliders.required' => 'Це поле не може бути пустим',
            'sliders.*.title.required' => 'Це поле не може бути пустим',
            'sliders.*.title.max' => 'Це поле повинно містити менше ніж 32 символи',
            'sliders.*.text.required' => 'Це поле не може бути пустим',
            'sliders.*.image.required' => 'Це поле не може бути пустим',

            'gallery.required' => 'Це поле не може бути пустим',
            'gallery.*.title.required' => 'Це поле не може бути пустим',
            'gallery.*.title.max' => 'Це поле повинно містити менше ніж 32 символи',
            'gallery.*.image.required' => 'Це поле не може бути пустим',
            'gallery.*.previewImage' => 'Для завантажити відео також потрібно завантажити початкове фото',

            'faqs.required' => 'Це поле не може бути пустим',
            'faqs.*.question.required' => 'Це поле не може бути пустим',
            'faqs.*.answer.required' => 'Це поле не може бути пустим',

            'employees.required' => 'Це поле не може бути пустим',
            'employees.*.full_name.required' => 'Це поле не може бути пустим',
            'employees.*.position.required' => 'Це поле не може бути пустим',
            'employees.*.position.image' => 'Це поле не може бути пустим',
        ];
    }
}
