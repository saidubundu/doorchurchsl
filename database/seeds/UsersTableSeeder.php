<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('users')->truncate();
        $faker = Factory::create();
        DB::table('users')->insert([
            [
                'name' => 'Door Church',
                'email' => 'door@peektower.com',
                'password' => bcrypt('password'),
                'bio' => $faker->sentence(rand(10,15))
            ],

            [
                'name' => 'John Doe',
                'email' => 'doe@peektower.com',
                'password' => bcrypt('password'),
                'bio' => $faker->sentence(rand(10,15))
            ],

            [
                'name' => 'Jane Doe',
                'email' => 'jane@peektower.com',
                'password' => bcrypt('password'),
                'bio' => $faker->sentence(rand(10,15))
            ],
        ]);
    }
}
