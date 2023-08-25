<?php

namespace Database\Seeders;

use App\Models\Settings\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('roles')->delete();
        $specializations = [
            ['en'=> 'deputy', 'ar'=> 'وكيل'],
            ['en'=> 'supervisor', 'ar'=> 'رئيس قسم'],
            ['en'=> 'senior', 'ar'=> 'خبرة'],
            ['en'=> 'junior', 'ar'=> 'مبتدأ'],
        ];
        foreach ($specializations as $S) {
            Role::create(['Role_Name' => $S]);
        }
    }
}
