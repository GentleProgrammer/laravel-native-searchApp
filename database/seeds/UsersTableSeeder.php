<?php

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
        $user = App\User::create([
        	'name' => 'Gentle Programmer',
        	'email' => 'test1@gmail.com',
        	'password' => bcrypt('123456'),
           

        ]);

        $user = App\User::create([
        	'name' => 'Prince Jacob',
        	'email' => 'test2@gmail.com',
        	'password' => bcrypt('123456'),
           

        ]);

        $user = App\User::create([
        	'name' => 'Jay',
        	'email' => 'test3@gmail.com',
        	'password' => bcrypt('123456'),
           

        ]);
    }
}
