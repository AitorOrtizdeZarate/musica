<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::create([
        	'name' => 'Admin',
        	'email' => 'admin@admin.com',
            'email_verified_at' => '2020-06-05 22:22:22',
        	'password' => bcrypt('andatza'),
            'rol' => 'admin'
        ]);
        $users = User::create([
            'name' => 'Aitor',
            'email' => 'aitoorodz@gmail.com',
            'email_verified_at' => '2020-06-05 22:22:22',
            'password' => bcrypt('andatza'),
            'rol' => 'usuario'
        ]);
    }
}
