<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Role extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['Role_Name'];
    protected $guarded=[''];
    public $timestamps = true;
}
