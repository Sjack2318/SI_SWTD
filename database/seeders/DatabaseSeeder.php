<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@test.com';
        $user->password = bcrypt('password');

        $user = new User();
        $user->name = '1513300615';
        $user->email = 'adonis@unitru.edu.pe';
        $user->password = bcrypt('adonis');

        $user->save();
    }
}
