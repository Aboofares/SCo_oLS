<?php

namespace App\Models\Teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Translatable\HasTranslations;

class Teacher extends Authenticatable
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded=[''];
    public $timestamps = true;
}
