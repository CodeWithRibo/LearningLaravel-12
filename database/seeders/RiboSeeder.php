<?php

namespace Database\Seeders;

use App\Models\Ribo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Ribo::factory()->count(50)->create();
    }
}
