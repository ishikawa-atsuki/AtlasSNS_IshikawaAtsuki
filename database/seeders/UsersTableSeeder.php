<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// データベース操作の記述簡略化
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
        DB::table('users')->insert([
            ['username' => 'guest', 'email' => 'hogo@hoge', 'password' => 'hogehoge']
        // 暗号化処理＝ハッシュ化？
        ]);
    }
}
