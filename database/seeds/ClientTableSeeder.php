<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CodeEducation\Client::truncate();
        factory(\CodeEducation\Client::class, 10)->create();
    }
}
