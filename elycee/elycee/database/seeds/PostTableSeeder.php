<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('posts')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('posts')->insert(
            [
                [
                    'user_id'       => 3,
                    'title'         => 'Les suites récurrentes',
                    'abstract'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'content'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia, tortor ac ornare finibus, dui lacus maximus arcu, sit amet efficitur urna dolor eu leo. Donec venenatis vehicula lectus, vel sagittis nisl. Nullam eget sollicitudin nisi, non sodales lectus. Maecenas non ultrices orci. Maecenas nec scelerisque justo. Cras ipsum lorem, commodo sit amet sem id, commodo tristique ligula. Nam et magna et neque dictum rhoncus. Duis dapibus purus et nulla varius, eu euismod nisi feugiat. Nulla facilisi.',
                    'url_thumbnail' => 'public/images/suites.gif'
                ],
                [
                    'user_id'       => 3,
                    'title'         => 'La machine de Turing',
                    'abstract'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'content'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia, tortor ac ornare finibus, dui lacus maximus arcu, sit amet efficitur urna dolor eu leo. Donec venenatis vehicula lectus, vel sagittis nisl. Nullam eget sollicitudin nisi, non sodales lectus. Maecenas non ultrices orci. Maecenas nec scelerisque justo. Cras ipsum lorem, commodo sit amet sem id, commodo tristique ligula. Nam et magna et neque dictum rhoncus. Duis dapibus purus et nulla varius, eu euismod nisi feugiat. Nulla facilisi.',
                    'url_thumbnail' => 'public/images/legoTuring.jpg'
                ],
                [
                    'user_id'       => 3,
                    'title'         => 'Le commerce de la banane',
                    'abstract'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'content'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia, tortor ac ornare finibus, dui lacus maximus arcu, sit amet efficitur urna dolor eu leo. Donec venenatis vehicula lectus, vel sagittis nisl. Nullam eget sollicitudin nisi, non sodales lectus. Maecenas non ultrices orci. Maecenas nec scelerisque justo. Cras ipsum lorem, commodo sit amet sem id, commodo tristique ligula. Nam et magna et neque dictum rhoncus. Duis dapibus purus et nulla varius, eu euismod nisi feugiat. Nulla facilisi.',
                    'url_thumbnail' => 'public/images/banane.jpg',
                ]
            ]
        );
    }

}
