<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bikes')->insert([
            [
                'id' => 1,
                'manufacturer' => 'Ducati',
                'model' => 'Libero',
                'license_plate' => 'JG-GY-636',
                'color' => 'Linen',
                'horsepower' => 55,
                'consumption' => 7.56,
                'year' => 1977,
                'owner_id' => 3
            ],
            [
                'id' => 2,
                'manufacturer' => 'Kawasaki',
                'model' => 'Optio',
                'license_plate' => 'TF-VP-104',
                'color' => 'LightSalmon',
                'horsepower' => 97,
                'consumption' => 1.41,
                'year' => 1971,
                'owner_id' => 1
            ],
            [
                'id' => 3,
                'manufacturer' => 'Ducati',
                'model' => 'Natus',
                'license_plate' => 'UE-XN-852',
                'color' => 'Darkorange',
                'horsepower' => 45,
                'consumption' => 9.04,
                'year' => 1993,
                'owner_id' => 3
            ],
            [
                'id' => 4,
                'manufacturer' => 'BMW',
                'model' => 'Est',
                'license_plate' => 'DZ-YW-705',
                'color' => 'Pink',
                'horsepower' => 87,
                'consumption' => 6.19,
                'year' => 1990,
                'owner_id' => 2
            ],
            [
                'id' => 5,
                'manufacturer' => 'Suzuki',
                'model' => 'Voluptate',
                'license_plate' => 'RD-KB-071',
                'color' => 'Gainsboro',
                'horsepower' => 74,
                'consumption' => 5.65,
                'year' => 1979,
                'owner_id' => 5
            ],
            [
                'id' => 6,
                'manufacturer' => 'Honda',
                'model' => 'City',
                'license_plate' => 'AH-HJ-878',
                'color' => 'Blue',
                'horsepower' => 56,
                'consumption' => 8.21,
                'year' => 1999,
                'owner_id' => 1
            ],
        ]);
    }
}
