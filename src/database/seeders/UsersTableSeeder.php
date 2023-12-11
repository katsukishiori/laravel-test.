<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'name' => '山田太郎',
        'email' => 'text@example.com',
        'password' => 'coachtech1106'
        ];
        DB::table('users')->insert(
        $param = [
        'name' => '山田太郎',
        'email' => 'text@example.com',
        'password' => 'coachtech1106'
         ]);

    }
}
