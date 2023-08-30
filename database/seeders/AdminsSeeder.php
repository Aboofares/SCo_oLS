<?php

namespace Database\Seeders;

use App\Models\Admins\Admin;
use App\Models\Settings\Gender;
use App\Models\Settings\Nationality;
use App\Models\Settings\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//        DB::table('admins')->insert([
//            'name' => ['en' => 'Employee One', 'ar' => 'موظف 1'],
//            'email' => 'Employee.Employee@gmail.com',
//            'password' => Hash::make('12345678'),
//        ]);

        DB::table('admins')->delete();
        $admins = new Admin();
        $admins->email = 'admin1@yahoo.com';
        $admins->password = Hash::make('12345678');
        $admins->name = ['en' => 'E1 Mohamed', 'ar' => 'م1 محمد'];
        $admins->nationality_id= 5;
        $admins->religion_id= 1;
        $admins->gender_id= 1;
        $admins->department_id = 1;
        $admins->profileImageURL = '1.png';
//        $admins->role_id = 'admin1@yahoo.com';
        $admins->save();



    }
}



