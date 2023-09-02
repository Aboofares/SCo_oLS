<?php

namespace App\Models\Families;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Translatable\HasTranslations;

class Family extends Authenticatable
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['Father_Name','Mother_Name'];
    protected $guarded=[''];
    public $timestamps = true;

    // علاقة بين المعلمين والانواع لجلب Religion
    public function Religions()
    {
        return $this->belongsTo('App\Models\Settings\Religion', 'religion_id');
    }

    // علاقة بين المعلمين والانواع لجلب Nationality
    public function Nationalities()
    {
        return $this->belongsTo('App\Models\Settings\Nationality', 'nationality_id');
    }
}
