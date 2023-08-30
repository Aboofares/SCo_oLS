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


    // علاقة بين المعلمين والانواع لجلب جنس المعلم
    public function Genders()
    {
        return $this->belongsTo('App\Models\Settings\Gender', 'gender_id');
    }

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


    // علاقة بين المعلمين والانواع لجلب Nationality
    public function Families()
    {
        return $this->belongsTo('App\Models\Families\Family', 'family_id');
    }

}
