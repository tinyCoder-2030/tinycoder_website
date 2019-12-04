<?php

use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            'goal' => 'يهدف مركز بوابة المنطق ألى نشر الوعي التقني بين افراد المجتمع وتنمية القدرات المدفونة المتوفره في ابنائنا للاستفاده من قدراتهم في بناء الوطن. ',
            'vision' => 'لمواكبة رؤية 2030 قمنا ب .........',
            'message' => 'نحمل على اعتاقنا مسؤولية ......',
        ]);
    }
}
