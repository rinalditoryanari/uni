<?php

namespace Database\Seeders;

use App\Models\AsistenDosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsistenDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AsistenDosen::factory()->count(10)->withPassword ('12345678')->create();
    }
}
