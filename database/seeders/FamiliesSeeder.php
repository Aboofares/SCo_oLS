<?php

namespace Database\Seeders;

use App\Models\Families\Family;
use App\Models\Settings\Nationality;
use App\Models\Settings\Religion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FamiliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('families')->delete();
//        $my_parents = new Family();
//        $my_parents->email = 'parent@yahoo.com';
//        $my_parents->password = Hash::make('12345678');
//        $my_parents->Father_Name = ['en' => 'Emad Mohamed', 'ar' => 'عماد محمد'];
//        $my_parents->Father_nationality_id = Nationality::all()->unique()->random()->id;
//         $my_parents->Father_religion_id = Religion::all()->unique()->random()->id;
//        $my_parents->Father_Id = '1234567810';
//        $my_parents->Mother_Name = ['en' => 'SS', 'ar' => 'سس'];
//        $my_parents->Mother_Id = '1234567810';
//        $my_parents->Nationality_Mother_id = Nationality::all()->unique()->random()->id;
//        $my_parents->Religion_Mother_id = Religion::all()->unique()->random()->id;
//        $my_parents->save();

        DB::table('families')->delete();
        $Family = new Family();
        $Family->email = 'parent@yahoo.com';
        $Family->password = Hash::make('12345678');
        $Family->Father_Name= ['en' => 'Emad Mohamed', 'ar' => 'عماد محمد'];
        $Family->Father_nationality_id= Nationality::all()->unique()->random()->id ;
        $Family->Father_religion_id=  Religion::all()->unique()->random()->id;
        $Family->Mother_Name= ['en' => 'SS', 'ar' => 'سس'];
        $Family->Mother_nationality_id= Nationality::all()->unique()->random()->id;
        $Family->Mother_religion_id= Religion::all()->unique()->random()->id;
        $Family->save();
    }
}
