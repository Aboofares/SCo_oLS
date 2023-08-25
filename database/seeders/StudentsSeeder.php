<?php

namespace Database\Seeders;

use App\Models\Settings\Gender;
use App\Models\Settings\Nationality;
use App\Models\Settings\Religion;
use App\Models\Students\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('students')->insert([
//            'name' => ['en' => 'studentOne', 'ar' => 'طالب 1'],
//            'email' => 'studentOne@studentOne.com',
//            'password' => Hash::make('12345678'),
//            'Uni_Id' => '12345678',
//            'nationality_id' => Nationality::all()->unique()->random()->id,
//            'religion_id' => Religion::all()->unique()->random()->id,
//            'gender_id' => Gender::all()->unique()->random()->id,
//        ]);


        DB::table('students')->delete();
        $Student = new Student();
        $Student->email = 'student1@yahoo.com';
        $Student->password = Hash::make('12345678');
        $Student->name = ['en' => ' student Emad', 'ar' => 'محمد student'];
        $Student->save();
    }
}
