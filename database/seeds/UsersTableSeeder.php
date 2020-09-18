<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'neocarvajal',
            'email' => 'admin@email.dev',
            'password' => bcrypt('12345678')
        ]);

        factory(User::class, 10)->create();
    }
}
