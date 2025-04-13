<?php

namespace Database\Seeders;

use App\Models\Dojo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DojoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dojo::factory()->count(10)->create();
    }
}
