<?php

namespace App\Models\Admins\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Stage extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded=[''];
    public $timestamps = true;

    public function Sections()
    {
        return $this->hasMany('App\Models\Admins\Settings\Classroom', 'stage_id');
    }
}
