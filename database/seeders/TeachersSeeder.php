<?php

namespace Database\Seeders;

use App\Models\Settings\Gender;
use App\Models\Settings\Nationality;
use App\Models\Settings\Religion;
use App\Models\Teachers\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('teachers')->insert([
//            'name' => ['en' => 'Teacher One', 'ar' => 'مدرس 1'],
//            'email' => 'TeacherOne@TeacherOne.com',
//            'password' => Hash::make('12345678'),
//            'Uni_Id' => '12345678',
//            'nationality_id' => Nationality::all()->unique()->random()->id,
//            'religion_id' => Religion::all()->unique()->random()->id,
//            'gender_id' => Gender::all()->unique()->random()->id,
//        ]);

        DB::table('teachers')->delete();
        $Teacher = new Teacher();
        $Teacher->email = 'teacher1@yahoo.com';
        $Teacher->password = Hash::make('12345678');
        $Teacher->name = ['en' => ' Mohamed Mohamed', 'ar' => 'محمد محمد'];
        $Teacher->nationality_id  =Nationality::all()->unique()->random()->id ;
        $Teacher->religion_id  = Religion::all()->unique()->random()->id;
        $Teacher->gender_id= Gender::all()->unique()->random()->id;
        $Teacher->specialization_id = '1';
        $Teacher->save();
    }
}
