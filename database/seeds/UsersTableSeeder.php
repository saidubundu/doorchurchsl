<?php

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

        DB::table('users')->delete();
        if (env('APP_ENV') === 'local') {
            DB::table('users')->insert([
                [
                    'name' => 'Door Church',
                    'email' => 'door@peektower.com',
                    'password' => bcrypt('password'),
                    'bio' => 'This is the bio'
                ],

                [
                    'name' => 'John Doe',
                    'email' => 'doe@peektower.com',
                    'password' => bcrypt('password'),
                    'bio' => 'This is the bio'
                ],

                [
                    'name' => 'Jane Doe',
                    'email' => 'jane@peektower.com',
                    'password' => bcrypt('password'),
                    'bio' => 'This is the bio'
                ],
            ]);
        }else
        {
            DB::table('users')->insert([
                [
                    'name' => "Administrator",
                    'email' => "admin@test.com",
                    'password' => bcrypt('admin'),
                    'bio' => "I'm an Administrator"
                ]
            ]);
        }
    }
}
