<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Translatable\HasTranslations;

class Student extends Authenticatable
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded=[''];
    public $timestamps = true;
}
