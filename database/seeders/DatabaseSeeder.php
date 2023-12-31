<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(ReligionSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(BloodTypeSeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(SpecializationSeeder::class);
        $this->call(DepartmentSeeder::class);

    }
}
