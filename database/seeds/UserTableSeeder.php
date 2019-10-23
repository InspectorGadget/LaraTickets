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
        $user = new \App\User;
        $user->username = 'admin';
        $user->email = 'root@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('password');
        $user->role = '1';
        $user->save();
    }
}
