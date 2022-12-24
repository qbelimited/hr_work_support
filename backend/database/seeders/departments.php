<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class departments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Finance',
            'status' => 1
        ]);

        Department::create([
            'name' => 'Human resource',
            'status' => 1
        ]);

        Department::create([
            'name' => 'IT',
            'status' => 1
        ]);
    }
}
