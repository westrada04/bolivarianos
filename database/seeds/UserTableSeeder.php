<?php

use App\User;
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
        $user = new User;
        $user->name = 'emerson cortina';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

        $user = new User;
        $user->name = 'wilmer estrada';
        $user->email = 'westrada04@gmail.com';
        $user->password = bcrypt('westrada04');
        $user->save();

    }
}
