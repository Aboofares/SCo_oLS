<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Religion extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['Religion_Name'];
    protected $guarded=[''];
    public $timestamps = true;
}
