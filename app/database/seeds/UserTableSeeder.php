<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('users')->truncate();
     
        $users = [
            [
                'username' => 'EventManager',
                'email' => 'manish.jakhode@hiteshi.com',
                'password' => Hash::make('@vent!')
            ]
        ];
        DB::table('users')->insert($users);
    }

}
