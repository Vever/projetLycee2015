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
                    'title'         => 'php name',
                    'content'       => 'Que signifient les lettres PHP.',
                    'class_level'   => 'final_class',
                ],
                [
                    'title'         => 'javascript',
                    'content'       => 'Pour déclarer le début du code JavaScript, j\'écris la ligne suivante :',
                    'class_level'   => 'first_class',
                ],
                [
                    'title'         => 'IDE',
                    'content'       => 'Qu\'est ce qu\'un \'IDE\' ?',
                    'class_level'   => 'final_class',
                ],
                [
                    'title'         => 'Html, paragraphe',
                    'content'       => 'Quelles balises permettent d\'ouvrir un paragraphe ?',
                    'class_level'   => 'first_class',
                ]
            ]
        );
    }

}
