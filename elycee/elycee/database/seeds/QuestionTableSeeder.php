<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('questions')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('questions')->insert(
            [
                [
                    'fiche_id'      => 1,
                    'content'       => '100 000 000 < 99 999 999',
                    'reponse'       => 'faux'
                ],
                [
                    'fiche_id'      => 1,
                    'content'       => '2x2 = 2+2',
                    'reponse'       => 'vrai'
                ],
                [
                    'fiche_id'      => 1,
                    'content'       => 'Un triangle a 4 côtés?',
                    'reponse'       => 'faux'
                ],
                [
                    'fiche_id'      => 1,
                    'content'       => '3+3+3+3+3+3+3x2 = 24',
                    'reponse'       => 'vrai'
                ]
            ]
        );
    }

}