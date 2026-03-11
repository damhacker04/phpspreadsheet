<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 50 data penduduk secara otomatis
        Penduduk::factory(50)->create();
    }
}
