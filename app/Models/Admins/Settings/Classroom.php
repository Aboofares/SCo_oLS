<?php

namespace App\Models\Admins\Settings;

use App\Models\Students\Student;
use App\Models\Teachers\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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


    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class,'teacher_classrooms');
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class,'student_classrooms');
    }
}
