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
        \CodeEducation\Entities\Client::truncate();
        factory(\CodeEducation\Entities\Client::class, 10)->create();
    }
}
