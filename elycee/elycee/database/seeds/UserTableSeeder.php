<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('users')->insert(
            [
                [
                    'name'      => 'Maxime',
                    'password'  => Hash::make('maxime'),
                    'role'      => 'first_class',
                ],
                [
                    'name'      => 'Hervé',
                    'password'  => Hash::make('herve'),
                    'role'      => 'final_class',
                ],
                [
                    'name'      => 'Prof',
                    'password'  => Hash::make('prof'),
                    'role'      => 'first_class',
                ]
            ]
        );
    }

}
