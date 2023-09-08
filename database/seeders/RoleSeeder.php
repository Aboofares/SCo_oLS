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
        //php artisan db:seed --class=RoleSeeder


        DB::table('roles')->delete();
        $specializations = [
            ['en'=> 'all2', 'ar'=> '2الكل'],
        ];

        $pp= array();
        foreach (config('customeperm.permissions') as $name => $value){
            $ty=$name;
            array_push($pp,$ty);
        }
//        dd($pp);
        foreach ($specializations as $S) {
            Role::create(['name' => $S,
                'Role_Description' =>  "all",
                'permissions'=>json_encode($pp),
            ]);
        }






    }
}
