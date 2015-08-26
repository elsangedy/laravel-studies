<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CodeEducation\Entities\Project::truncate();
        factory(\CodeEducation\Entities\Project::class, 10)->create();
    }
}
