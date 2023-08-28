<?php

namespace Database\Seeders;

use App\Models\Settings\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->delete();
        $specializations = [
            ['en'=> 'Admission', 'ar'=> 'التقديم'],
            ['en'=> 'Finance', 'ar'=> 'الحسابات'],
            ['en'=> 'Information Technology', 'ar'=> 'تكنلوجيا المعلومات'],
            ['en'=> 'Marketing', 'ar'=> 'تسويق'],
        ];
        foreach ($specializations as $S) {
            Department::create(['name' => $S]);
        }
    }
}
