<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            [
                'nama' => 'Barito',
                'email' => 'barito123@gmail.com',
                'password' => Hash::make('password123'),
                'picture' => 'default2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
