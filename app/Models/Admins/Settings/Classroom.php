<?php

namespace App\Models\Admins\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded=[''];
    public $timestamps = true;



    public function Grade()
    {
        return $this->belongsTo('App\Models\Admins\Settings\Grade', 'grade_id');
    }


    public function Stage()
    {
        return $this->belongsTo('App\Models\Admins\Settings\Stage', 'stage_id');
    }
}
