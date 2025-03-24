<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'DR.Helmi',
            'no_hp' => '0895360000606',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        User::create([
            'nama' => 'Balqis wijayani',
            'no_hp' => '08123456788',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);
    }
}
