<?php

namespace Database\Seeders;

use App\Models\Codesc;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CodescSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Codesc::create([
            'code_type_id' => 1,
            'name' => 'Ghana',
            'desc' => 'Countries',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 1,
            'name' => 'Togo',
            'desc' => 'Countries',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 1,
            'name' => 'Nigeria',
            'desc' => 'Countries',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 2,
            'name' => 'Accra',
            'desc' => 'Cities',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 2,
            'name' => 'Tema',
            'desc' => 'Cities',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 3,
            'name' => 'Driver',
            'desc' => 'Job titles',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 3,
            'name' => 'Director',
            'desc' => 'Job Titles',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 3,
            'name' => 'Manager',
            'desc' => 'Job Titles',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 4,
            'name' => 'Finance',
            'desc' => 'Finance Department',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 4,
            'name' => 'Human Resource',
            'desc' => 'HR Department',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 5,
            'name' => 'Male',
            'desc' => 'Male',
            'status' => 1
        ]);

        Codesc::create([
            'code_type_id' => 5,
            'name' => 'Female',
            'desc' => 'Female',
            'status' => 1
        ]);
    }
}
