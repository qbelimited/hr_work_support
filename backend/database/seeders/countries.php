<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'country_code' => '001',
            'name' => 'Ghana',
            // 'status' => 1
        ]);

        Country::create([
            'country_code' => '002',
            'name' => 'Nigeria',
            // 'status' => 1
        ]);
    }
}
