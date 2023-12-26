<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //user yang di add random
       User::factory(10)->create();

       //tambah (bikin) user dengan data statis
       User::create([
            'name' => 'Aisyah admin',
            'email' => 'aisyah@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456')   //pakai hash utk security, passwordnya 123456
       ]);

    }
}
