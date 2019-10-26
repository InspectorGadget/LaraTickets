<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->username = 'admin';
        $admin->email = 'root@gmail.com';
        $admin->password = \Illuminate\Support\Facades\Hash::make('password');
        $admin->save();
    }
}
