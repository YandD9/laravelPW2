<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Fakultas::create([
            'nama_fakultas' => 'Fakultas Ilmu Komputer dan Rekayasa'
        ]);

        Fakultas::create([
            'nama_fakultas' => 'Fakultas Ilmu Ekonomi'
        ]);
    }
}
