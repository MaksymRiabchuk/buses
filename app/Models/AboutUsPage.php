<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class AboutUsPage extends Model
{
    protected $fillable = ['first_main_image', 'first_main_text', 'reasons_main_text', 'reason_title_1', 'reason_title_2',
        'reason_title_3', 'reason_text_1', 'reason_text_2', 'reason_text_3', 'reviews_side_image', 'our_history_text',
        'our_history_title_mark_1', 'our_history_title_mark_2', 'our_history_title_mark_3', 'our_history_title_mark_4',
        'our_history_title_mark_5','our_history_image'];

    public $table='about_us_page';

    public static function processImage($imageData, $key): string
    {
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $imageData, $matches)) {
            $extension = $matches[2];
            $imageData = base64_decode($matches[3]);
            $fileName = $key . '_' . Str::uuid();
            $imageName = '/about_us/' . $fileName . '.' . $extension;
            Storage::disk('public')->put($imageName, $imageData);
            if (!Storage::disk('public')->exists($imageName)) {
                return false;
            }
            $url = Storage::disk('public')->path($imageName);
            $image = Image::read($url);
            Storage::disk('public')->delete($imageName);
            $image->toWebp();
            $image->save(Storage::disk('public')->path('about_us/' . $fileName . '.webp'), 72);
            return $fileName . '.webp';
        }
        return $imageData;
    }
}
