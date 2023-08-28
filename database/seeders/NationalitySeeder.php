<?php

namespace Database\Seeders;

use App\Models\Settings\Nationality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nationalities')->delete();


        $nationality = [

            [
                'en'=> 'Afghan',
                'ar'=> 'أفغانستاني'
            ],
            [

                'en'=> 'Algerian',
                'ar'=> 'جزائري'
            ],
            [

                'en'=> 'Australian',
                'ar'=> 'أسترالي'
            ],
            [

                'en'=> 'Bahraini',
                'ar'=> 'بحريني'
            ],
            [

                'en'=> 'Egyptian',
                'ar'=> 'مصري'
            ],
            [

                'en'=> 'French',
                'ar'=> 'فرنسي'
            ],
            [

                'en'=> 'German',
                'ar'=> 'ألماني'
            ],
            [

                'en'=> 'Greek',
                'ar'=> 'يوناني'
            ],
            [

                'en'=> 'Guinean',
                'ar'=> 'غيني'
            ],
            [

                'en'=> 'Hungarian',
                'ar'=> 'مجري'
            ],
            [

                'en'=> 'Indian',
                'ar'=> 'هندي'
            ],
            [

                'en'=> 'Indonesian',
                'ar'=> 'أندونيسيي'
            ],
            [

                'en'=> 'Iranian',
                'ar'=> 'إيراني'
            ],
            [

                'en'=> 'Iraqi',
                'ar'=> 'عراقي'
            ],
            [

                'en'=> 'Irish',
                'ar'=> 'إيرلندي'
            ],
            [

                'en'=> 'Italian',
                'ar'=> 'إيطالي'
            ],
            [

                'en'=> 'Ivory Coastian',
                'ar'=> 'ساحل العاج'
            ],
            [

                'en'=> 'Jamaican',
                'ar'=> 'جمايكي'
            ],
            [

                'en'=> 'Japanese',
                'ar'=> 'ياباني'
            ],
            [

                'en'=> 'Jordanian',
                'ar'=> 'أردني'
            ],
            [

                'en'=> 'Kenyan',
                'ar'=> 'كيني'
            ],
            [

                'en'=> 'Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'Libyan',
                'ar'=> 'ليبي'
            ],
            [

                'en'=> 'Malaysian',
                'ar'=> 'ماليزي'
            ],
            [

                'en'=> 'Mexican',
                'ar'=> 'مكسيكي'
            ],
            [

                'en'=> 'Moroccan',
                'ar'=> 'مغربي'
            ],
            [

                'en'=> 'Dutch',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'Nigerian',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Norwegian',
                'ar'=> 'نرويجي'
            ],
            [

                'en'=> 'Omani',
                'ar'=> 'عماني'
            ],
            [

                'en'=> 'Pakistani',
                'ar'=> 'باكستاني'
            ],

            [

                'en'=> 'Palestinian',
                'ar'=> 'فلسطيني'
            ],

            [

                'en'=> 'Papua New Guinean',
                'ar'=> 'بابوي'
            ],
            [

                'en'=> 'Filipino',
                'ar'=> 'فلبيني'
            ],

            [

                'en'=> 'Polish',
                'ar'=> 'بوليني'
            ],
            [

                'en'=> 'Portuguese',
                'ar'=> 'برتغالي'
            ],

            [

                'en'=> 'Qatari',
                'ar'=> 'قطري'
            ],

            [

                'en'=> 'Romanian',
                'ar'=> 'روماني'
            ],
            [

                'en'=> 'Russian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Saudi Arabian',
                'ar'=> 'سعودي'
            ],
            [

                'en'=> 'Senegalese',
                'ar'=> 'سنغالي'
            ],
            [

                'en'=> 'Serbian',
                'ar'=> 'صربي'
            ],
            [

                'en'=> 'Singaporean',
                'ar'=> 'سنغافوري'
            ],
            [

                'en'=> 'Slovak',
                'ar'=> 'سولفاكي'
            ],
            [

                'en'=> 'Slovenian',
                'ar'=> 'سولفيني'
            ],
            [

                'en'=> 'Somali',
                'ar'=> 'صومالي'
            ],
            [

                'en'=> 'South African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'South Sudanese',
                'ar'=> 'سوادني جنوبي'
            ],
            [

                'en'=> 'Spanish',
                'ar'=> 'إسباني'
            ],
            [

                'en'=> 'Sudanese',
                'ar'=> 'سوداني'
            ],
            [

                'en'=> 'Swedish',
                'ar'=> 'سويدي'
            ],
            [

                'en'=> 'Swiss',
                'ar'=> 'سويسري'
            ],
            [

                'en'=> 'Syrian',
                'ar'=> 'سوري'
            ],
            [

                'en'=> 'Taiwanese',
                'ar'=> 'تايواني'
            ],
            [

                'en'=> 'Tanzanian',
                'ar'=> 'تنزانيي'
            ],
            [

                'en'=> 'Thai',
                'ar'=> 'تايلندي'
            ],
            [

                'en'=> 'Tunisian',
                'ar'=> 'تونسي'
            ],
            [

                'en'=> 'Turkish',
                'ar'=> 'تركي'
            ],
            [

                'en'=> 'Ugandan',
                'ar'=> 'أوغندي'
            ],
            [

                'en'=> 'Ukrainian',
                'ar'=> 'أوكراني'
            ],
            [

                'en'=> 'Emirati',
                'ar'=> 'إماراتي'
            ],
            [

                'en'=> 'British',
                'ar'=> 'بريطاني'
            ],
            [

                'en'=> 'American',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Vietnamese',
                'ar'=> 'فيتنامي'
            ],
            [

                'en'=> 'American Virgin Islander',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Yemeni',
                'ar'=> 'يمني'
            ],
        ];

        foreach ($nationality as $n) {
            Nationality::create(['name' => $n]);
        }
    }
}
