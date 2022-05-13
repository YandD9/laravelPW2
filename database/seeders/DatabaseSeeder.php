<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Mahasiswa::create(
            [
                'npm' => '2024250001',
                'nama' => 'Ahmad',
                'tempat_lahir' => 'Palembang',
                'tanggal_lahir' => '2000-01-01'
            ]
        );

        Mahasiswa::create(
            [
                'npm' => '2024250002',
                'nama' => 'Ali',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2000-02-02'
            ]
        );
    }
}
