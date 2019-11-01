<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = 'user';
        $user->email = 'root@gmail.com';
        $user->role = '1';
        $user->password = Hash::make('password');
        $user->save();
    }
}
