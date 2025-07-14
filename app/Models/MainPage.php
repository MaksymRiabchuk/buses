<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class MainPage extends Model
{
    protected $fillable = ['first_main_image', 'first_main_title', 'first_main_text', 'first_main_btn_text',
        'slider_title_1', 'slider_title_2', 'slider_title_3', 'slider_title_4', 'slider_title_5', 'slider_title_6',
        'slider_text_1', 'slider_text_2', 'slider_text_3', 'slider_text_4', 'slider_text_5', 'slider_text_6',
        'slider_img_1', 'slider_img_2', 'slider_img_3', 'slider_img_4', 'slider_img_5', 'slider_img_6',
        'about_us_text', 'about_us_item_title_1', 'about_us_item_text_1',
        'about_us_item_title_2', 'about_us_item_text_2', 'about_us_item_title_3', 'about_us_item_text_3',
        'gallery_text', 'gallery_item_image_1', 'gallery_item_image_2', 'gallery_item_image_3',
        'gallery_item_image_4', 'gallery_item_image_5', 'gallery_item_image_6', 'gallery_item_title_1',
        'gallery_item_title_2', 'gallery_item_title_3', 'gallery_item_title_4', 'gallery_item_title_5', 'gallery_item_title_6',
        'faqs_text', 'faqs_item_question_1', 'faqs_item_question_2', 'faqs_item_question_3', 'faqs_item_answer_1',
        'faqs_item_answer_2', 'faqs_item_answer_3', 'review_item_text_1', 'review_item_text_2', 'review_item_text_3',
        'review_item_text_4', 'review_item_author_1', 'review_item_author_2', 'review_item_author_3', 'review_item_author_4',
        'team_member_name_1', 'team_member_name_2', 'team_member_name_3', 'team_member_name_4', 'team_member_name_5',
        'team_member_name_6', 'team_member_position_1', 'team_member_position_2', 'team_member_position_3',
        'team_member_position_4', 'team_member_position_5', 'team_member_position_6', 'team_member_image_1',
        'team_member_image_2', 'team_member_image_3', 'team_member_image_4', 'team_member_image_5', 'team_member_image_6',];
    public $table = 'main_page';

    public static function processImage(UploadedFile $imageFile, $key): string
    {
        $extension = $imageFile->getClientOriginalExtension();
        $fileName = $key . '_' . Str::uuid();
        $tempPath = Storage::disk('public')->path('main/' . $fileName . '.' . $extension);
        $imageFile->move(dirname($tempPath), basename($tempPath));
        $image = Image::read($tempPath);
        Storage::disk('public')->delete('main/' . $fileName . '.' . $extension);
        $image->toWebp();
        $image->save(Storage::disk('public')->path('main/' . $fileName . '.webp'), 72);

        return $fileName . '.webp';
    }

    public static function processVideo(UploadedFile $videoFile, $key): string
    {
        $extension = $videoFile->getClientOriginalExtension();
        $fileName = $key . '_' . Str::uuid() . '.' . $extension;
        $videoPath = 'main/' . $fileName;
        Storage::disk('public')->putFileAs('main', $videoFile, $fileName);
        if (!Storage::disk('public')->exists($videoPath)) {
            return false;
        }

        return $fileName;
    }

}
