<?php

namespace Database\Seeders;

use Database\Seeders\countries;
use Illuminate\Database\Seeder;
use Database\Seeders\departments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        //  departments::class,
        //  countries::class,
         CodeTypeSeeder::class,
         CodescSeeder::class,
        ]);
    }
}
