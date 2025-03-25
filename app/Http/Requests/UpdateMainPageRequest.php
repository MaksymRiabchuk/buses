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

            'slider_title_1' => 'required|string|max:32',
            'slider_title_2' => 'required|string|max:32',
            'slider_title_3' => 'required|string|max:32',
            'slider_title_4' => 'required|string|max:32',
            'slider_title_5' => 'required|string|max:32',
            'slider_title_6' => 'required|string|max:32',
            'slider_text_1' => 'required|string',
            'slider_text_2' => 'required|string',
            'slider_text_3' => 'required|string',
            'slider_text_4' => 'required|string',
            'slider_text_5' => 'required|string',
            'slider_text_6' => 'required|string',
            'slider_img_1' => 'required|string',
            'slider_img_2' => 'required|string',
            'slider_img_3' => 'required|string',
            'slider_img_4' => 'required|string',
            'slider_img_5' => 'required|string',
            'slider_img_6' => 'required|string',

            'about_us_text' => 'required|string',
            'about_us_item_title_1' => 'required|string|max:32',
            'about_us_item_title_2' => 'required|string|max:32',
            'about_us_item_title_3' => 'required|string|max:32',
            'about_us_item_text_1' => 'required|string',
            'about_us_item_text_2' => 'required|string',
            'about_us_item_text_3' => 'required|string',

            'gallery_text' => 'required|string',
            'gallery_item_image_1' => 'required|string',
            'gallery_item_image_2' => 'required|string',
            'gallery_item_image_3' => 'required|string',
            'gallery_item_image_4' => 'required|string',
            'gallery_item_image_5' => 'required|string',
            'gallery_item_image_6' => 'required|string',
            'gallery_item_title_1' => 'required|string|max:32',
            'gallery_item_title_2' => 'required|string|max:32',
            'gallery_item_title_3' => 'required|string|max:32',
            'gallery_item_title_4' => 'required|string|max:32',
            'gallery_item_title_5' => 'required|string|max:32',
            'gallery_item_title_6' => 'required|string|max:32',

            'faqs_text' => 'required|string',
            'faqs_item_question_1' => 'required|string|max:64',
            'faqs_item_question_2' => 'required|string|max:64',
            'faqs_item_question_3' => 'required|string|max:64',
            'faqs_item_answer_1' => 'required|string',
            'faqs_item_answer_2' => 'required|string',
            'faqs_item_answer_3' => 'required|string',

            'team_member_name_1' => 'required|string|max:32',
            'team_member_name_2' => 'required|string|max:32',
            'team_member_name_3' => 'required|string|max:32',
            'team_member_name_4' => 'required|string|max:32',
            'team_member_name_5' => 'required|string|max:32',
            'team_member_name_6' => 'required|string|max:32',
            'team_member_position_1' => 'required|string|max:32',
            'team_member_position_2' => 'required|string|max:32',
            'team_member_position_3' => 'required|string|max:32',
            'team_member_position_4' => 'required|string|max:32',
            'team_member_position_5' => 'required|string|max:32',
            'team_member_position_6' => 'required|string|max:32',
            'team_member_image_1' => 'required|string',
            'team_member_image_2' => 'required|string',
            'team_member_image_3' => 'required|string',
            'team_member_image_4' => 'required|string',
            'team_member_image_5' => 'required|string',
            'team_member_image_6' => 'required|string',

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

            'slider_title_1.required' => 'Це поле не може бути пустим',
            'slider_title_1.max' => 'Це поле повинно містити менше ніж 32 символи',
            'slider_title_2.required' => 'Це поле не може бути пустим',
            'slider_title_2.max' => 'Це поле повинно містити менше ніж 32 символи',
            'slider_title_3.required' => 'Це поле не може бути пустим',
            'slider_title_3.max' => 'Це поле повинно містити менше ніж 32 символи',
            'slider_title_4.required' => 'Це поле не може бути пустим',
            'slider_title_4.max' => 'Це поле повинно містити менше ніж 32 символи',
            'slider_title_5.required' => 'Це поле не може бути пустим',
            'slider_title_5.max' => 'Це поле повинно містити менше ніж 32 символи',
            'slider_title_6.required' => 'Це поле не може бути пустим',
            'slider_title_6.max' => 'Це поле повинно містити менше ніж 32 символи',
            'slider_text_1.required' => 'Це поле не може бути пустим',
            'slider_text_2.required' => 'Це поле не може бути пустим',
            'slider_text_3.required' => 'Це поле не може бути пустим',
            'slider_text_4.required' => 'Це поле не може бути пустим',
            'slider_text_5.required' => 'Це поле не може бути пустим',
            'slider_text_6.required' => 'Це поле не може бути пустим',
            'slider_img_1.required' => 'Це поле не може бути пустим',
            'slider_img_2.required' => 'Це поле не може бути пустим',
            'slider_img_3.required' => 'Це поле не може бути пустим',
            'slider_img_4.required' => 'Це поле не може бути пустим',
            'slider_img_5.required' => 'Це поле не може бути пустим',
            'slider_img_6.required' => 'Це поле не може бути пустим',

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
            'gallery_item_title_1.required' => 'Це поле не може бути пустим',
            'gallery_item_title_2.required' => 'Це поле не може бути пустим',
            'gallery_item_title_3.required' => 'Це поле не може бути пустим',
            'gallery_item_title_4.required' => 'Це поле не може бути пустим',
            'gallery_item_title_5.required' => 'Це поле не може бути пустим',
            'gallery_item_title_6.required' => 'Це поле не може бути пустим',
            'gallery_item_image_1.required' => 'Це поле не може бути пустим',
            'gallery_item_image_2.required' => 'Це поле не може бути пустим',
            'gallery_item_image_3.required' => 'Це поле не може бути пустим',
            'gallery_item_image_4.required' => 'Це поле не може бути пустим',
            'gallery_item_image_5.required' => 'Це поле не може бути пустим',
            'gallery_item_image_6.required' => 'Це поле не може бути пустим',
            'gallery_item_title_1.max' => 'Це поле повинно містити менше ніж 32 символи',
            'gallery_item_title_2.max' => 'Це поле повинно містити менше ніж 32 символи',
            'gallery_item_title_3.max' => 'Це поле повинно містити менше ніж 32 символи',
            'gallery_item_title_4.max' => 'Це поле повинно містити менше ніж 32 символи',
            'gallery_item_title_5.max' => 'Це поле повинно містити менше ніж 32 символи',
            'gallery_item_title_6.max' => 'Це поле повинно містити менше ніж 32 символи',

            'faqs_text' => 'Це поле не може бути пустим',
            'faqs_item_question_1.required' => 'Це поле не може бути пустим',
            'faqs_item_question_2.required' => 'Це поле не може бути пустим',
            'faqs_item_question_3.required' => 'Це поле не може бути пустим',
            'faqs_item_question_1.max' => 'Це поле повинно містити менше ніж 64 символи',
            'faqs_item_question_2.max' => 'Це поле повинно містити менше ніж 64 символи',
            'faqs_item_question_3.max' => 'Це поле повинно містити менше ніж 64 символи',
            'faqs_item_answer_1.required' => 'Це поле не може бути пустим',
            'faqs_item_answer_2.required' => 'Це поле не може бути пустим',
            'faqs_item_answer_3.required' => 'Це поле не може бути пустим',

            'team_member_name_1.required' => 'Це поле не може бути пустим',
            'team_member_name_2.required' => 'Це поле не може бути пустим',
            'team_member_name_3.required' => 'Це поле не може бути пустим',
            'team_member_name_4.required' => 'Це поле не може бути пустим',
            'team_member_name_5.required' => 'Це поле не може бути пустим',
            'team_member_name_6.required' => 'Це поле не може бути пустим',
            'team_member_name_1.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_name_2.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_name_3.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_name_4.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_name_5.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_name_6.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_position_1.required' => 'Це поле не може бути пустим',
            'team_member_position_2.required' => 'Це поле не може бути пустим',
            'team_member_position_3.required' => 'Це поле не може бути пустим',
            'team_member_position_4.required' => 'Це поле не може бути пустим',
            'team_member_position_5.required' => 'Це поле не може бути пустим',
            'team_member_position_6.required' => 'Це поле не може бути пустим',
            'team_member_position_1.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_position_2.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_position_3.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_position_4.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_position_5.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_position_6.max' => 'Це поле повинно містити менше ніж 32 символи',
            'team_member_image_1.required' => 'Це поле не може бути пустим',
            'team_member_image_2.required' => 'Це поле не може бути пустим',
            'team_member_image_3.required' => 'Це поле не може бути пустим',
            'team_member_image_4.required' => 'Це поле не може бути пустим',
            'team_member_image_5.required' => 'Це поле не може бути пустим',
            'team_member_image_6.required' => 'Це поле не може бути пустим',
        ];
    }
}
