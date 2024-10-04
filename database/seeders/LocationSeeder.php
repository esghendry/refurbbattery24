<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'id' => 1,
            'name' => 'Productiefaciliteit',
            'image' => 'locations/1/production_facility.webp',
            'building_name' => 'BCT Treeport',
            'address' => 'Treeport',
            'number' => '103',
            'postal_code' => '4891 PZ',
            'city' => 'Rijsbergen',
            'province' => 'Noord-Brabant',
            'country' => 'Nederland',
        ]);
    }
}
