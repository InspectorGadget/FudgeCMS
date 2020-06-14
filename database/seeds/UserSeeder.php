<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Admin';
        $user->email = 'admin@rtgnetworks.com';
        $user->role_id = 1;
        $user->password = \Illuminate\Support\Facades\Hash::make('password');
        $user->save();
    }
}
