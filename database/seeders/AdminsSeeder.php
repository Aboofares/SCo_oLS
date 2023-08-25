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
        $admins->name = ['en' => 'Emad Mohamed', 'ar' => 'عماد محمد'];
        $admins->save();



    }
}



