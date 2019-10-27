<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->username = 'user';
        $user->email = 'root@gmail.com';
        $user->role = '1';
        $user->password = \Illuminate\Support\Facades\Hash::make('password');
        $user->save();
    }
}
