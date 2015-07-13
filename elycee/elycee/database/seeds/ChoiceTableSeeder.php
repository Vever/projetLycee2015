<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChoiceTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('choices')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('choices')->insert(
            [
                [
                    'question_id'   => 1,
                    'content'       => 'PHP: Hypertext Preprocessor',
                    'status'        => 'yes',
                ],
                [
                    'question_id'   => 1,
                    'content'       => 'Perroquet Herbivore du Portugal',
                    'status'        => 'no',
                ],
                [
                    'question_id'   => 2,
                    'content'       => 'function tralala()',
                    'status'        => 'no',
                ],
                [
                    'question_id'   => 2,
                    'content'       => '<SCRIPT language="javascript">',
                    'status'        => 'yes',
                ],
                [
                    'question_id'   => 2,
                    'content'       => '<SCRIPT language="javascript"/>',
                    'status'        => 'no',
                ],
                [
                    'question_id'   => 3,
                    'content'       => 'Un site pour donner ses idées révolutionnaires.',
                    'status'        => 'no',
                ],
                [
                    'question_id'   => 3,
                    'content'       => 'Un logiciel qui permet de créer une page internet sans taper de code.',
                    'status'        => 'no',
                ],
                [
                    'question_id'   => 3,
                    'content'       => 'Un logiciel qui permet de visualiser le résultat de nos codes.',
                    'status'        => 'yes',
                ],
                [
                    'question_id'   => 4,
                    'content'       => '<p>',
                    'status'        => 'yes',
                ],
                [
                    'question_id'   => 4,
                    'content'       => '</p>',
                    'status'        => 'no',
                ],
                [
                    'question_id'   => 4,
                    'content'       => '<prg>',
                    'status'        => 'no',
                ],
            ]
        );
    }

}
