<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'          =>  'Автор неизвестен',
                'email'         =>  'author_unknown@g.g',
                'password'      =>  bcrypt(\Illuminate\Support\Str::random(16))
            ],
            [
                'name'          =>  'Автор',
                'email'         =>  'author@g.g',
                'password'      =>  bcrypt('131123')
            ]
        ];

        \DB::table('users')->insert($data);
    }
}
