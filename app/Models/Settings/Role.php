<?php

namespace App\Models\Settings;

use App\Models\Admins\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Role extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded=[''];
    public $timestamps = true;


    public function Admin()
    {
        $this->hasMany(Admin::class);
    }



    public function getPermissionsAttribute($permissions)
    {
        return json_decode($permissions, true);
    }
}
