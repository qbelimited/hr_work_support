<?php

namespace Database\Seeders;

use App\Models\CodeType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CodeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CodeType::create([
            'code' => 'COT',
            'desc' => 'Country',
            'status' => 1
        ]);

        CodeType::create([
            'code' => 'CIT',
            'desc' => 'City',
            'status' => 1
        ]);

        CodeType::create([
            'code' => 'JT',
            'desc' => 'Job title',
            'status' => 1
        ]);

        CodeType::create([
            'code' => 'DPT',
            'desc' => 'Departments',
            'status' => 1
        ]);

        CodeType::create([
            'code' => 'GEN',
            'desc' => 'Gender',
            'status' => 1
        ]);
    }
}
