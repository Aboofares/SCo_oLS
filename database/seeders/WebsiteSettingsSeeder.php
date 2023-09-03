<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('website_settings')->delete();

        $data = [

                ['key' => 'school_nameEn', 'value' => 'School of'],
                ['key' => 'school_nameAr', 'value' => 'مدرسة ال'],
                ['key' => 'school_phone', 'value' => '0123456789'],
                ['key' => 'school_phone2', 'value' => '0123456789'],
                ['key' => 'school_Address', 'value' => 'القاهرة'],
                ['key' => 'school_email', 'value' => 'info@morasoft.com'],
                ['key' => 'school_fb', 'value' => 'info@fb.com'],
                ['key' => 'school_ins', 'value' => 'info@inst.com'],
                ['key' => 'logo', 'value' => '1.jpg'],

        ];

        DB::table('website_settings')->insert($data);
    }
}
