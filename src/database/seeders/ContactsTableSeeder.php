<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $this->call(ContactsTableSeeder::class);

        $param = [
  
      'name' => '山田太郎',
      'gender' => '男性',
      'email' => 'text@example.com'
 
      'detail' => ''
    ];
    DB::table('contacts')->insert($param);
    $param = [
      'first-name' => '山田',
      'last-name' => '太郎',
      'gender' => '男性',
      'email' => 'text@example.com'
      'tel' => '0080112345678'
      'address' => '東京都渋谷区千駄ヶ谷1-2-3'
      'building' => '千駄ヶ谷マンション101'
      'detail' => ''

    ];

    DB::table('contacts')->insert($param);
    $param = [
      'first-name' => '山田',
      'last-name' => '太郎',
      'gender' => '男性',
      'email' => 'text@example.com'
      'tel' => '0080112345678'
      'address' => '東京都渋谷区千駄ヶ谷1-2-3'
      'building' => '千駄ヶ谷マンション101'
      'detail' => ''

    ];

    DB::table('contacts')->insert($param);
    $param = [
      'first-name' => '山田',
      'last-name' => '太郎',
      'gender' => '男性',
      'email' => 'text@example.com'
      'tel' => '0080112345678'
      'address' => '東京都渋谷区千駄ヶ谷1-2-3'
      'building' => '千駄ヶ谷マンション101'
      'detail' => ''

    ];

}

}