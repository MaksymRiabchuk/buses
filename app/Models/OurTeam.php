<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class OurTeam extends Model
{
    protected $fillable = ['first_main_image', 'first_main_text', 'about_us_text'];

    public static function processImage($imageData, $key): string
    {
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $imageData, $matches)) {
            $extension = $matches[2];
            $imageData = base64_decode($matches[3]);
            $fileName = $key . '_' . Str::uuid();
            $imageName = '/our_team/' . $fileName . '.' . $extension;
            Storage::disk('public')->put($imageName, $imageData);
            if (!Storage::disk('public')->exists($imageName)) {
                return false;
            }
            $url = Storage::disk('public')->path($imageName);
            $image = Image::read($url);
            Storage::disk('public')->delete($imageName);
            $image->toWebp();
            $image->save(Storage::disk('public')->path('our_team/' . $fileName . '.webp'), 72);
            return $fileName . '.webp';
        }
        return $imageData;
    }
}
