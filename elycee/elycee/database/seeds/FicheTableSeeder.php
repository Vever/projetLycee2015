<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FicheTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('fiches')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('fiches')->insert(
            [
                [
                    'title'         => 'Calcul Mental',
                    'class_level'   => 'first_class',
                    'status'        => 'publish'
                ],
                [
                    'title'         => 'Algèbre',
                    'class_level'   => 'final_class',
                    'status'        => 'publish'
                ],
                [
                    'title'         => 'Suites logiques',
                    'class_level'   => 'final_class',
                    'status'        => 'unpublish'
                ],
            ]
        );
    }

}
