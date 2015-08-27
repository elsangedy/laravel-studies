<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeEducation\Entities\User::class)->create([
            'name' => 'Munir Ahmed Elsangedy',
            'email' => 'elsangedy@gmail.com',
            'password' => bcrypt(123),
            'remember_token' => str_random(10),
        ]);

        factory(\CodeEducation\Entities\User::class, 4)->create();
    }
}
