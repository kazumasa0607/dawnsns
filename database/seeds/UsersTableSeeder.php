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
        //userテーブルにデータを追加
        DB::table("users")->insert([
            ["username"=> "seeder_test_user"],
            ["mail"=> "seedertest@testmail.com"],
            ["password"=> "testuser"],
            ["bio" => "シーディングの動作確認で作成されたユーザです"],
        ]);
    }
}
