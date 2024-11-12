<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Jalankan seed untuk tabel `users`.
     *
     * @return void
     */
    public function run()
    {
        // Membuat user dengan data default
        User::create([
            'name' => 'admin', // Nama pengguna
            'email' => 'admin@gmail.com', // Email pengguna
            'password' => Hash::make('admin'), // Kata sandi yang di-hash
        ]);
    }
}
