<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bibles')->delete();
        $faker = \Faker\Factory::create();

        DB::table('bibles')->insert([
            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],

            [
                'script' => $faker->sentence(rand(20,30)),
                'verse' => 'J:3:16'
            ],
        ]);
    }
}
