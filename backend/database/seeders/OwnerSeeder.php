<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('owners')->insert([
            [
                'id' => 1,
                'name' => 'River Gerhold DVM',
                'country' => 'Iraq',
                'sex' => 'female',
            ],
            [
                'id' => 2,
                'name' => 'Prof. Jennings Heidenreich DVM',
                'country' => 'Malta',
                'sex' => 'male',
            ],
            [
                'id' => 3,
                'name' => 'Lora Bechtelar',
                'country' => 'Costa Rica',
                'sex' => 'female',
            ],
            [
                'id' => 4,
                'name' => 'Sylvia Feest',
                'country' => 'Congo',
                'sex' => 'female',
            ],
            [
                'id' => 5,
                'name' => 'Lajoska Tyson',
                'country' => 'Uzbegistan',
                'sex' => 'other',
            ],
        ]);
    }
}
