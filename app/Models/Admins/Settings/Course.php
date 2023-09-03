<?php

namespace App\Models\Admins\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Course extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded=[''];
    public $timestamps = true;


    public function Specialization()
    {
        return $this->belongsTo('App\Models\Settings\Specialization', 'specialization_id');
    }
}
