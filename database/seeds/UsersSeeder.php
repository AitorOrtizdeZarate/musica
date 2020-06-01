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
        	'password' => bcrypt('andatza')
        ]);
    }
}