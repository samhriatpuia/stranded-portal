<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'superadmin@mail.com',
            'password' => Hash::make('password')
           


    ]);
    }
}
