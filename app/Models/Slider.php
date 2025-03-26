<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $fillable = ['title', 'text', 'image'];
    public $table = 'main_slider';
}
