<?php

namespace App\Models\Admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Translatable\HasTranslations;

class Admin extends Authenticatable
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded=[''];
    public $timestamps = true;


    //Genders علاقة  لجلب
    public function Genders()
    {
        return $this->belongsTo('App\Models\Settings\Gender', 'gender_id');
    }

    //Religion علاقة  لجلب
    public function Religions()
    {
        return $this->belongsTo('App\Models\Settings\Religion', 'religion_id');
    }

    //  Nationality  علاقة  لجلب
    public function Nationalities()
    {
        return $this->belongsTo('App\Models\Settings\Nationality', 'nationality_id');
    }

    //  Nationality  علاقة  لجلب
    public function Departments()
    {
        return $this->belongsTo('App\Models\Settings\Department', 'department_id');
    }

    public function Roles()
    {
        return $this->belongsTo('App\Models\Settings\Role', 'role_id');
    }


    public function hasAbility($permissions)    //products  //mahoud -> admin can't see brands
    {
        $role = $this->Roles;

        if (!$role) {
            return false;
        }

        foreach ($role->permissions as $permission) {
            if (is_array($permissions) && in_array($permission, $permissions)) {
                return true;
            } else if (is_string($permissions) && strcmp($permissions, $permission) == 0) {
                return true;
            }
        }
        return false;
    }

}
