<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    //\CodeEducation\Entities\ProjectNote::truncate();
    //\CodeEducation\Entities\Project::truncate();
    //\CodeEducation\Entities\Client::truncate();
    //\CodeEducation\Entities\User::truncate();

    $this->call(UserTableSeeder::class);
    $this->call(ClientTableSeeder::class);
    $this->call(ProjectTableSeeder::class);
    $this->call(ProjectNoteTableSeeder::class);

    Model::reguard();
  }
}
