<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'address' => 'Admin address',
            'phone' => '12124325',
            'gender' => 'MALE',
            'role' => 'ADMIN',
            'email' => 'admin@welltimeprivatespa.de',
            'password' => Hash::make('AswQXD1211S')
        ]);
    }
}
