<?php

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
                'name'      => 'unknown',
                'email'     => 'unknown@mail.com',
                'password'  => bcrypt(Str::random(16)),
            ],
            [
                'name'      => 'author',
                'email'     => 'author@mail.com',
                'password'  => bcrypt('123123'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
