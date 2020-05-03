<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testimonies')->truncate();
        $faker = Factory::create();

        DB::table('testimonies')->insert([
            [
                'name' => $faker->name,
                'script' => $faker->sentence(rand(20,30)),
            ],

            [
                'name' => $faker->name,
                'script' => $faker->sentence(rand(20,30)),
            ],

            [
                'name' => $faker->name,
                'script' => $faker->sentence(rand(20,30)),
            ],
        ]);
    }
}
