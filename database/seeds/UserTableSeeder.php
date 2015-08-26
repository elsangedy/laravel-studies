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
        \CodeEducation\Entities\User::truncate();

        $user = new \CodeEducation\Entities\User;
        $user->name = 'Munir Ahmed Elsangedy';
        $user->email = 'elsanngedy@gmail.com';
        $user->password = bcrypt(123);
        $user->remember_token = str_random(10);
        $user->save();

        factory(\CodeEducation\Entities\User::class, 4)->create();
    }
}
